<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
public $data;
    /**

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from ItSolutionStuff.com')
            ->line('Thank you for using our application!')
            ->from('mohamed2562289mbn@gmail.com')
            ->line("puy {$this->data->Paid} Created by {$this->data->course->instructor->name}")
            ->line('Thank you for using our application!');
    }
}
