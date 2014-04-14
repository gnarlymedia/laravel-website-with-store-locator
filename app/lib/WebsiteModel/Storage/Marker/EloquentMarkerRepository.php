<?php namespace WebsiteModel\Storage\Marker;
 
use Marker;
 
class EloquentMarkerRepository implements MarkerRepository {
 
	public function all()
	{
		return Marker::all();
	}
	
	public function find($id)
	{
		return Marker::find($id);
	}
	
	public function create($input)
	{
		return Marker::create($input);
	}
	
	public function update($id)
	{
		$marker = $this->find($id);
		
		$marker->save(\Input::all());
		
		return $marker;
	}
	
	public function delete($id)
	{
		$marker = $this->find($id);
		
		return $marker->delete();
	}
}