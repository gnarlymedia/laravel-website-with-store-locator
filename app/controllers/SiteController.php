<?php

use WebsiteModel\Storage\Site\SiteRepository as Site;

class SiteController extends \BaseController {

	/**
	 * Site Repository
	 */
	protected $site;


	/**
	 * Inject the Site Repository
	 */
	public function __construct(Site $site)
	{
		$this->site = $site;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->site->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('site.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$s = $this->site->create(Input::all());
		
		if ($s->isSaved()) {
			return Redirect::route('site.index')
			->with('flash', 'The new site has been created');
		}
		
		return Redirect::route('site.create')
			->withInput()
			->withErrors($s->errors()); 

// Using validators
/*
		$v = new WebsiteModel\Services\Validators\Site;
		
		if ($v->passes())
		{
			$this->site->create($input);
			
			return Redirect::route('site.index')
			->with('flash', 'The new site has been created');
		}
		
		return Redirect::route('site.create')
			->withInput()
			->withErrors($v->getErrors());
*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->site->find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$site = $this->site->find($id);
		
		return View::make('site.edit')->with('site', $site);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$s = $this->site->update($id);
		
		if ($s->isSaved()) {
			return Redirect::route('site.show', $id)
			->with('flash', 'The site was updated');
		}
		
		return Redirect::route('site.edit', $id)
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
		return $this->site->delete($id);
	}

	public function createOneLineAddressSummary()
	{
		return $this->site->createOneLineAddressSummary();
	}
}