<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PeopleSendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.PeopleSendMail')
                    ->subject('Registro Exitoso en Luxury')
                    ->attachFromStorage('public/Luxury.pdf', 'Luxury.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}