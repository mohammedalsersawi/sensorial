<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\sendmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class check
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
    public function handle($event)
    {
        $data=$event->data;
        $user=User::where('id',$data->user_id)->first();
        $user->notify(new sendmail($data));
    }
}
