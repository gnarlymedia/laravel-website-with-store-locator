<?php namespace WebsiteModel\Storage\Patient;
 
interface PatientRepository {

	public function all();
	
	public function find($id);
	
	public function create($input);
	
	public function update($input);
	
	public function delete($id);
}