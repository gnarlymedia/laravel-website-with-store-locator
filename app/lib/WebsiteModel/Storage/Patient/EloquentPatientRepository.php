<?php namespace WebsiteModel\Storage\Patient;
 
use Patient;
 
class EloquentPatientRepository implements PatientRepository {
 
	public function all()
	{
		return Patient::all();
	}
	
	public function find($id)
	{
		return Patient::find($id);
	}
	
	public function create($input)
	{
		return Patient::create($input);
	}
	
	public function update($id)
	{
		$user = $this->find($id);
		
		$user->save(\Input::all());
		
		return $user;
	}
	
	public function delete($id)
	{
		$user = $this->find($id);
		
		return $user->delete();
	}
}