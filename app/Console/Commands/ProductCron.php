<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;

class ProductCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:cron';

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
        Product::where('deleted_at','>',now()->subDays(7))->onlyTrashed()->forceDelete();
    }
}
