<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Notification;
use App\Notifications\newMessage;

class testSlack extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:slack';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test slack notifications for slack';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        Notification::route('slack', env('SLACK_WEBHOOK'))
          ->notify(new newMessage());
        return "Gửi tin nhắn thành công!";
    }
}
