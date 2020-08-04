<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Jobs\EventReminder;
use App\POst;
use Auth;

class RemindMe extends Mailable
{
    use Queueable, SerializesModels;

    protected $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(POst $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reminderAttachment')
                    ->subject('Event Reminder')
                    ->with([
                        'EventName' => $this->post->EventName,
                        'EventDate' => $this->post->EventDate,
                        'poster_image' => $this->post->poster_image,  
                        'Organizer' => $this->post->Organizer,
                        'id' => $this->post->id,
                    ])
                    ;
    }
}
