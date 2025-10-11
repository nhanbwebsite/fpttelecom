<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $client;
    /**
     * Create a new message instance.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Order Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.user_order',
            with: [
                'data' => $this->client, // 👈 truyền biến sang view
            ],
        );
    }

    public function build()
{
    return $this->markdown('emails.user_order')
                ->with(['data' => $this->client])
                ->subject('User Order Mail');
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
