<?php

namespace App\Mail;

use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $email;
    protected $name;
    protected $activationToken;

    public function __construct($email, $name, $activationToken)
    {
        $this->email = $email;
        $this->name = $name;
        $this->activationToken = $activationToken;
    }
   

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verify Email',
        );
    }

    /**
     * Get the message content definition.
     */
   public function content(): Content
{
    $activationLink = route('activation.verify', ['token' => $this->activationToken]);

    return new Content(
        markdown: 'mail.verify-email',
        with: [
            'email' => $this->email,
            'userName' => $this->name,
            'token' => $this->activationToken,
            'activationLink' => $activationLink,
        ],
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
