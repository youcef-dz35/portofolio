<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject ='Email from Personal Site Contact Form';
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content= $content;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->replyTo($this->content['email'],$this->content['name']);

        return $this->view('emails.contact-message');


        // return $this
        //     ->view('emails.contact-message')
        //     ->subject($this->content['subject'])
        //     ->from('y.kebir@univboumerdes.dz')
        //     ->to(['kebiryoucef07@gmail.com'])
        //     ->sendgrid([
        //         'personalizations' => [
        //             [
        //                 'substitutions' => [
        //                     ':myname' => 's-ichikawa',
        //                 ],
        //             ],
        //         ],
        //     ]);



    }
}
