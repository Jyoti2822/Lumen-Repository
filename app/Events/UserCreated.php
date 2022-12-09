<?php

namespace App\Events;

class UserCreated extends Event
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $email;
    public function __construct($email)
    {   $this->email=$email;
        //
    }
}
