<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

     public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build(){
        return $this->markdown('mail.hello')->subject(config('app.name') . ', Contact us');
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'AnasFolio',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.hello',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
