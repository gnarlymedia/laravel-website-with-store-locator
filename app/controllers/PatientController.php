<?php

use WebsiteModel\Storage\Patient\PatientRepository as Patient;

class PatientController extends BaseController {

	/**
	 * Patient Repository
	 */
	protected $patient;


	/**
	 * Inject the Patient Repository
	 */
	public function __construct(Patient $patient)
	{
		$this->patient = $patient;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->patient->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('patient.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$s = $this->patient->create(Input::all());
		
		if ($s->isSaved()) {
			return Redirect::route('patient.index')
			->with('flash', 'The new patient has been created');
		}
		
		return Redirect::route('patient.create')
			->withInput()
			->withErrors($s->errors());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->patient->find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$patient = $this->patient->find($id);
		
		return View::make('patient.edit')->with('patient', $patient);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		ChromePhp::log('update');
		$s = $this->patient->update($id);
		
		if ($s->isSaved()) {
			return Redirect::route('patient.show', $id)
			->with('flash', 'The patient was updated');
		}
		
		return Redirect::route('patient.edit', $id)
			->withInput()
			->withErrors($s->errors());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->patient->delete($id);
	}

	public function createOneLineAddressSummary()
	{
		return $this->patient->createOneLineAddressSummary();
	}
}