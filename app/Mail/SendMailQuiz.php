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
    public $city;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$data,$phone,$city)
    {
        $this->data = $data;
        $this->phone = $phone;
        $this->city = $city;
        $this->name =$name;
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
        return $this->view('mail.sendMailQuiz', [
            'name' => $this->name,
            'data' => $this->data,
            'phone' => $this->phone,
            'city' => $this->city
        ]);
    }
}
