<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingToGusets extends Mailable
{
    use Queueable, SerializesModels;

    public $bookings;

    public function __construct($bookings)
    {
        $this->bookings  = $bookings;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.BookingToGusets');
    }
}
