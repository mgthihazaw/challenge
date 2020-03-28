<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompleteMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;
    public $subject = "Thanks your inquiry";
    public $content = "Accepted your inquiry. Please wait for a while.";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
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
        return $this->markdown('emails.complete')
                    ->withSubject($this->subject)
                    ->withContent($this->content)
                    ->withData($this->data);
    }
}
