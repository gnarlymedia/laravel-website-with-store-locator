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
		$patient = $this->find($id);
		
		$patient->save(\Input::all());
		
		return $patient;
	}
	
	public function delete($id)
	{
		$patient = $this->find($id);
		
		return $patient->delete();
	}
}