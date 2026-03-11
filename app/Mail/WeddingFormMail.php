<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WeddingFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // form data

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Wedding Form Submission')
                    ->view('admin.formInfo');
    }
}