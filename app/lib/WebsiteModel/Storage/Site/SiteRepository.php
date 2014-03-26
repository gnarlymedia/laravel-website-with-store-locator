<?php namespace WebsiteModel\Storage\Site;
 
interface SiteRepository {
   
  public function all();
 
  public function find($id);
 
  public function create($input);
 
}