<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class submitmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
       
        $this->name =$data['name'];
        $this->email =$data['email'];
        $this->subject =$data['subject'];
       
        
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
// return $this->view('emails.latemail->email')->with('name',$this->name)->with('email',$this->email)->with('subject',$this->subject)->with('message',$this->message);
         return $this->markdown('emails.latemail');
        
    }
}
