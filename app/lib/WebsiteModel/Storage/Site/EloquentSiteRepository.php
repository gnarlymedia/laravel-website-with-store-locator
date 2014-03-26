<?php namespace WebsiteModel\Storage\Site;
 
use Site;
 
class EloquentSiteRepository implements SiteRepository {
 
  public function all()
  {
    return Site::all();
  }
 
  public function find($id)
  {
    return Site::find($id);
  }
 
  public function create($input)
  {
    return Site::create($input);
  }
 
}