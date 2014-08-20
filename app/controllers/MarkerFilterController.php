<?php

use WebsiteModel\Storage\Marker\MarkerRepository as Marker;

class MarkerFilterController extends BaseController {

	/**
	 * Marker Repository
	 */
	protected $marker;


	/**
	 * Inject the Marker Repository
	 */
	public function __construct(Marker $marker)
	{
		$this->marker = $marker;
	}

    /**
     * Filter the resource.
     *
     * @return Response
     */
    public function filter()
    {
//        $location = Input::get('location');
//        var_dump($location);
        return Redirect::to('locations-list')
            ->withInput();
//        return View::make('locations-list')
//            ->withInput(Input::all())
//            ->with('location', $location);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->marker->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('marker.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$s = $this->marker->create(Input::all());
		
		if ($s->isSaved()) {
			return Redirect::route('marker.index')
			->with('flash', 'The new marker has been created');
		}
		
		return Redirect::route('marker.create')
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
		return $this->marker->find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$marker = $this->marker->find($id);
		
		return View::make('marker.edit')->with('marker', $marker);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		{{ ChromePhp::log('update function'); }}
		$s = $this->marker->update($id);
		
		if ($s->isSaved()) {
			return Redirect::route('marker.show', $id)
			->with('flash', 'The marker was updated');
		}
		
		return Redirect::route('marker.edit', $id)
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
		return $this->marker->delete($id);
	}

	public function createOneLineAddressSummary()
	{
		return $this->marker->createOneLineAddressSummary();
	}
}