<?php

namespace App\Jobs;

use App\Notifications\OrderNotification;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class NewOrderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $when=now()->addSeconds(10);
        $users=User::where('user_type',1)->get();
        foreach ($users as $user)
        {
            $user->notify (   (new OrderNotification())->delay($when)  );
        }
    }

}
