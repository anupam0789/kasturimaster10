<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProcessEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $subject;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message)
    {
        $this->message = $message;
        $this->subject = $subject;
        
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Enquiry Rejected',
    //     );
    // }

    public function build()
    {
        return $this->view('layouts.email')->with('body',['slot' => $this->message]); 
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'admin.enquiry.rejectemail',
    //     );
    // }

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
