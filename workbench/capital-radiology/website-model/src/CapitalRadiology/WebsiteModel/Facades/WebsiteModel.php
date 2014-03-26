<?php namespace CapitalRadiology\WebsiteModel\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class WebsiteModel extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'website-model'; }
 
}