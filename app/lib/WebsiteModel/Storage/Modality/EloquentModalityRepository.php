<?php namespace WebsiteModel\Storage\Modality;
 
use Modality;
 
class EloquentModalityRepository implements ModalityRepository {
 
	public function all()
	{
		return Modality::all();
	}
	
	public function find($id)
	{
		return Modality::find($id);
	}
	
	public function create($input)
	{
		return Modality::create($input);
	}
	
	public function update($id)
	{
		$modality = $this->find($id);
		
		$modality->save(\Input::all());
		
		return $modality;
	}
	
	public function delete($id)
	{
		$modality = $this->find($id);
		
		return $modality->delete();
	}
}