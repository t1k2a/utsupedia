<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Encyclopedia;
use Illuminate\Support\Facades\DB;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact.result')
                ->text('contact.message')
                ->subject('お問い合わせが届きました')
                ->with([
                    'text' => $this->text
                ]);
    }
}
