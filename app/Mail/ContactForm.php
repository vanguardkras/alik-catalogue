<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $phone;
    public $text;

    /**
     * Create a new message instance.
     *
     * @param $message
     */
    public function __construct($message)
    {
        $this->email = $message['email'];
        $this->phone = $message['phone'] ?? null;
        $this->text = $message['text'];
        $this->subject = env('APP_NAME') . ' (Сообщение формы обратной связи)';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact_form');
    }
}
