<?php

namespace App\Console\Commands;

use App\Mail\NotifyMail;
use App\Models\User;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDateTime = Carbon::now();

        $currentDateTimeString = $currentDateTime->toDateTimeString();
        $query = "
                    SELECT users.*
                    FROM users
                    LEFT JOIN orders ON users.id = orders.user_id
                    WHERE users.created_at >= DATE_SUB('$currentDateTimeString', INTERVAL 1 DAY)
                    AND orders.user_id IS NULL
                ";


        $users = DB::select($query);

        foreach ($users as $user) {
            Mail::to($user->email)->send(new NotifyMail());
        }

        $this->info('Reminder emails sent successfully.');
    }
}
