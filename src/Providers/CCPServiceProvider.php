<?php 
namespace AKaa\CCPApi\Providers;

use Illuminate\Support\ServiceProvider;
use Queue;
use Illuminate\Queue\Events\JobFailed;

/**
 * CCPServiceProvider class.
 * 
 * @extends ServiceProvider
 */
class CCPServiceProvider extends ServiceProvider
{

	protected $commands = [
        'AKaa\CCPApi\Console\Commands\SoapTest'
    ];
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
        	__DIR__.'../config/ccpapi.php' => config_path('ccpapi.php'),
		]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    $this->commands($this->commands);
    }
}
