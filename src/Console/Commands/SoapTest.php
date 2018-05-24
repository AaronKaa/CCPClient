<?php
namespace AKaa\CCPApi\Console\Commands;

use Illuminate\Console\Command;

use Devilwear\HiveEvent\Events\Product\ProductFullImport;
use Illuminate\Foundation\Bus\DispatchesJobs;

use AKaa\CCPApi\Client\CCPProductClient;

/**
 * SoapTest class.
 * 
 * @extends Command
 */
class SoapTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ccpapi:testsoap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test CCPApi Command';

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
		$client = new CCPProductClient;
		
		$r = $client->getActiveSalesChannels();
				
		dd($r);
	}
}
