<?php

namespace App\Listeners;

use App\Mail\userRegister;
use App\Notifications\WelcomeCustomer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeCustomerListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->notify(new WelcomeCustomer());
        
        Mail::to('akashkuamr140796@gmail.com', 'akash')->queue(new userRegister());
    }
}
