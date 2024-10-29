<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\User;
use App\Jobs\SendMail;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Log;

class SendMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    $products = User::all();
    $products->chunk(500)->each(function ($chunk) {
        foreach ($chunk as $product_code) {
            Log::info("user");
            Log::info($product_code);
            SendMail::dispatch($product_code);
        }
    });
    }
}
