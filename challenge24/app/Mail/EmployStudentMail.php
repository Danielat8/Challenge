<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Services\BrevoService;
use Illuminate\Support\Facades\Log;

class EmployStudentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    protected $toEmail;

    public function __construct($data, $toEmail)
    {
        $this->data = $data;
        $this->toEmail = $toEmail;
    }

    public function build()
    {
        return $this->view('emails.employ_student')
            ->with('data', $this->data)
            ->subject('New Company Contact Submission');
    }
}
