<?php

namespace App\Jobs;

use App\Mail\DemoMail;
use App\Models\CourseUser;
use App\Models\User;
use App\Notifications\sendmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendmailjop implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $data;
    public function __construct($data)
    {
    $this->data=$data;
    }
    public function handle()
    {
        $data=$this->data;

        if ($data->due_installments != 0){
            CourseUser::where('course_id',$data->course_id)->update([
                'status'=>0
            ]);
            $user=User::where('id',$data->user_id)->first();
            $user->notify(new sendmail($data));
//            Mail::to('mohamed2562289mbn@gmail.com')->send(new DemoMail($data));


        }
    }
}
