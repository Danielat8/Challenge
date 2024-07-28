<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class BrevoService
{
    protected $emailApiInstance;
    protected $contactsApiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('services.brevo.api_key'));
        $this->emailApiInstance = new TransactionalEmailsApi(new Client(), $config);
        $this->contactsApiInstance = new ContactsApi(new Client(), $config);
    }

    public function addContact($email, $attributes = [])
    {
        $createContact = new \SendinBlue\Client\Model\CreateContact([
            'email' => $email,
            'attributes' => $attributes,
            'listIds' => [6],
        ]);

        try {
            $this->contactsApiInstance->createContact($createContact);
            Log::info('Contact added successfully to Brevo for email ' . $email);
        } catch (\Exception $e) {
            Log::error('Error adding contact to Brevo: ' . $e->getMessage());
        }
    }

    public function sendWelcomeEmail($to, $company, $phone)
    {
        $subject = 'Welcome to Our Service!';
        $data = [
            'name' => $to,
            'company' => $company,
            'phone' => $phone
        ];

        try {
            Mail::send('emails.welcome', $data, function ($message) use ($to, $subject) {
                $message->to($to)
                    ->subject($subject)
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });
            Log::info('Welcome email sent successfully to ' . $to);
        } catch (\Exception $e) {
            Log::error('Error sending welcome email: ' . $e->getMessage());
        }
    }
}
