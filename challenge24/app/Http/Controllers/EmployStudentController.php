<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployStudent;
use App\Http\Requests\EmployRequest;
use App\Mail\EmployStudentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Services\BrevoService;



class EmployStudentController extends Controller
{
    protected $brevoService;

    public function __construct(BrevoService $brevoService)
    {
        $this->brevoService = $brevoService;
    }

    public function store(EmployRequest $request)
    {
        $data = $request->validated();

        Log::info('Data received in controller: ', $data);


        EmployStudent::create($data);
        Log::info('Data stored in database successfully.');


        $this->brevoService->addContact($data['email'], [
            'COMPANY' => $data['company'],
            'PHONE' => $data['phone']
        ]);

        $this->brevoService->sendWelcomeEmail($data['email'], $data['company'], $data['phone']);

        try {
            Mail::to($data['email'])->send(new EmployStudentMail($data, $data['email']));
            Log::info('Email sent successfully to ' . $data['email']);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Information submitted successfully');
    }
}
