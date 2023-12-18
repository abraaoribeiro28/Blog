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
use Illuminate\Queue\SerializesModels;

class SendEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Post $post
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Subscriber::all()->each(fn (Subscriber $subscriber) => SendEmailJob::dispatch($subscriber, $this->post));
    }
}
