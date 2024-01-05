<?php

namespace App\Jobs;

use App\Models\Admin\Post;
use App\Models\Subscriber;
use App\Notifications\PostNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Queue\SerializesModels;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

//    public $tries = 0;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Subscriber $subscriber,
        public Post $post
    )
    {
        //
    }

//    public function middleware()
//    {
//        return [
//            new RateLimited('post-notifications')
//        ];
//    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->subscriber->notify(new PostNotification($this->post));
    }
}
