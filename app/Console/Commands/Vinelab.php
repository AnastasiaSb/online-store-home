<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\HttpClientServiceInterface;

class Vinelab extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vinelab';

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
    public $httpClientServiceInterface;

    public function __construct(HttpClientServiceInterface $httpClientServiceInterface)
    {
        $this -> httpClientServiceInterface = $httpClientServiceInterface;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo $this-> httpClientServiceInterface->getHttpClientInfo();
    }
}
