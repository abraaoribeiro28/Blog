<?php

namespace App\Console\Commands;

use App\Models\Subscriber;
use App\Notifications\PostNotification;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar e-mail para os usuárions inscritos.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->withProgressBar(
            Subscriber::all(),
            fn (Subscriber $subscriber) => $subscriber->notify(new PostNotification)
        );
    }
}
