<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WecEmployee extends Mailable
{
    use Queueable, SerializesModels;

   public $guests;

    public function __construct($guests)
    {
        $this->guests = $guests;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.WecEmployee');
    }
}
