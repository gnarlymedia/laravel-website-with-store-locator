<?php namespace WebsiteModel\Storage;
 
use Illuminate\Support\ServiceProvider;
 
class StorageServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'WebsiteModel\Storage\Site\SiteRepository',
      'WebsiteModel\Storage\Site\EloquentSiteRepository'
    );
  }
 
}