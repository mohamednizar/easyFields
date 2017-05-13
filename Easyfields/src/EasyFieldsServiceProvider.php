<?php

namespace Easyfields\Easyfields;

use Illuminate\Support\ServiceProvider;

class EasyFieldsServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    	include __DIR__.'/routes.php';
    	// $this->app->singleton('easyfields.loader', function () {
    	// 	return new EasyFields();
    	// });
    	return $this->app->make('Easyfields\Easyfields\EasyFieldsController');
    }
    
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
    	return ['easyfields.loader'];
    }
}
