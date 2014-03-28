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
	
	public function update($id)
	{
		$site = $this->find($id);
		
		$site->save(\Input::all());
		
		return $site;
	}
	
	public function delete($id)
	{
		$site = $this->find($id);
		
		return $site->delete();
	}

	public function createOneLineAddressSummary()
	{
		return Site::createOneLineAddressSummary();
	}
}