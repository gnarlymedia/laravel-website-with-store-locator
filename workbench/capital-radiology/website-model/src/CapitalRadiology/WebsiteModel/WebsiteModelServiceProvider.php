<?php namespace CapitalRadiology\WebsiteModel;

use Illuminate\Support\ServiceProvider;

class WebsiteModelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('capital-radiology/website-model');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['website-model'] = $this->app->share(function($app)
		{
			return new WebsiteModel;
		});
		
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('WebsiteModel', 'CapitalRadiology\WebsiteModel\Facades\WebsiteModel');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('website-model');
	}

}
