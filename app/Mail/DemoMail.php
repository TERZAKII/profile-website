<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;


    public $main;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($main)
    {
        //

        $this->main=$main;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kuanysh.ktl.2002@gmail.com')->view('mail.main');
    }
}
