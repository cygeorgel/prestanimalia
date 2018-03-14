<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


use App\Student;

use App\Registration;


class CheckoutMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($student_id, $registration_id)
    {
        $this->student_id = $student_id;

        $this->registration_id = $registration_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $student_id = $this->student_id;

        $registration_id = $this->registration_id;

        $student = Student::find($student_id);

        $registration = Registration::find($registration_id);

        return $this->subject('Votre confirmation d\'inscription')
        ->view('emails.checkout', compact('student', 'registration'));
    }
}
