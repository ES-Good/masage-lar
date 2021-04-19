<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $city;
    public $summa;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $city, $summa)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->city = $city;
        $this->summa = $summa;
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
        return $this->view('mail.sendMail', [
            'name' => $this->name,
            'phone' => $this->phone,
            'city' => $this->city,
            'summa' => $this->summa
        ]);
    }
}
