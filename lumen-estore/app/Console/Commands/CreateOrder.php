<?php

namespace App\Console\Commands;

use App\Events\OrderCreated;
use App\Models\Order;
use Illuminate\Console\Command;

class CreateOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test order command with queue';

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
        $order = Order::inRandomOrder()->first();
        event(new OrderCreated($order));
        return 0;
    }
}
