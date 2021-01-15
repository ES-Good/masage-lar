<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailQuiz extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$phone)
    {
        $this->data = $data;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject = 'Новая заявка!';
        //$this->from('example@example.com' ,'example');
        return $this->view('mail.sendMailQuiz', ['data' => $this->data,'phone' => $this->phone]);
    }
}
