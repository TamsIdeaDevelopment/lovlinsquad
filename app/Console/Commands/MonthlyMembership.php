<?php

namespace App\Console\Commands;

use App\Agent;
use App\Mail\HQMembershipEmail;
use App\Mail\MembershipEmail;
use App\Order;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MonthlyMembership extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthly:membership';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify agent their membership';

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
     * @return int
     */
    public function handle()
    {
        $agent = Agent::where('HQ',0)->get();
        $listInActiveAgent = [];

        foreach($agent as $key)
        {
            $data = Order::
            where('status', 1)
                ->where('buyer_id',$key['user_id'])
                ->where('created_at', '<=', now()->subMonth(1))->latest()->first();

            if($data)
            {
                array_push($listInActiveAgent,$data['buyer_id']);

            }
        }
        Log::info($listInActiveAgent);
        foreach($listInActiveAgent as $inActiveAgent)
        {
            $HQ = User::where('role_id',1)->first();
            $user = User::findOrFail($inActiveAgent);
            $agent = Agent::where('user_id',$inActiveAgent)->first();

            Mail::to($user->email)->send(new MembershipEmail($user));
            Mail::to($HQ->email)->send(new HQMembershipEmail($user,$agent));
        }
    }
}
