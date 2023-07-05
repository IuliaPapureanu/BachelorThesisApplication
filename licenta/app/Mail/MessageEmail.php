<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contents;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contents,$subject)
    {
        $this->subject=$subject;
        $this->contents=$contents;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message')->subject($this->subject);
    }
}
