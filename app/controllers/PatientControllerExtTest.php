<?php

use WebsiteModel\Storage\Patient\PatientRepository as Patient;

class PatientControllerExtTest extends \BaseController {

	/**
	 * Patient Repository
	 */
	protected $patient;
	
	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.navbar';

	/**
	 * Inject the Patient Repository
	 */
	public function __construct(Patient $patient)
	{
		$this->patient = $patient;
	}

	/**
	 * Display a listing of the resource.
	 * GET /patientexttest
	 *
	 * @return Response
	 */
	public function index()
	{
		$patients = Auth::user()->patient;
		{{ ChromePhp::log('count($patients): '.count($patients)); }}
		switch (count($patients)) {
			case 1:
				{{ ChromePhp::log('case 1'); }}
				return Redirect::route('patient.edit', array($patients->id));
/* 				return View::make('patient-details-single', array('patient' => $patients[0])); */
				break;
			case 0:
				{{ ChromePhp::log('case 0'); }}
				return View::make('patient-details-single', array('message' => 'Sorry there are no details for that patient'));
				break;
			default:
				{{ ChromePhp::log('default'); }}
				return View::make('patient-details-multiple', array('patients' => $patients));
				break;
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /patientexttest/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /patientexttest
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->patient->store();
	}

	/**
	 * Display the specified resource.
	 * GET /patientexttest/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('patient-details-single', array('patient' => $this->patient->find($id)));
	}

	/**
     * Show the user profile.
     */
    public function showDetails($id)
    {
	    $patient = $this->show($id);
	    
	    switch ($patient) {
		    case 1:
			    return View::make('patient-details-single', array('patient' => $patient));
			case 0:
				return View::make('patient-details-single', array('message' => 'There weren\'t any patients for this view'));
			default:
			
	    }
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /patientexttest/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function testEdit()
	{
		$patients = Auth::user()->patient;
		{{ ChromePhp::log('count($patients): '.count($patients)); }}
		switch (count($patients)) {
			case 1:
				{{ ChromePhp::log('case 1'); }}
				return View::make('patient-details-single', array('patient' => $patients[0]));
				break;
			case 0:
				{{ ChromePhp::log('case 0'); }}
				return View::make('patient-details-single', array('message' => 'Sorry there are no details for that patient'));
				break;
			default:
				{{ ChromePhp::log('default'); }}
				return View::make('patient-details-multiple', array('patients' => $patients));
				break;
		}
	
	
		$patient = $this->patient->find($id);
		
		return View::make('patient.edit')->with('patient', $patient);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /patientexttest/{id}/edit
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
	 * PUT /patientexttest/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /patientexttest/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}