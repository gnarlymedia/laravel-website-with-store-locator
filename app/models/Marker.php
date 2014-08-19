<?php

use Magniloquent\Magniloquent\Magniloquent;

class Marker extends Magniloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'markers';

	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'name',
		'address',
        'openinghours',
        'phone',
        'fax',
		'lat',
		'lng',
        'email',
        'info',
        'location_region'
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');

	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'name' => 'required'
		),
		"create" => array(),
		"update" => array()
	);

	public function modalities()
    {
        return $this->belongsToMany('Modality');
    }

    public static $displayNames = array(
        'name'			=> 'Name',
        'address'		=> 'Address',
        'phone'	        => 'Phone',
        'fax'		    => 'Fax',
        'openinghours'	=> 'Opening hours',
        'email'			=> 'Email',
        'info'			=> 'Info'
    );

    public static $elementsToBold = array(
        'name'
    );

    public function isInRegion($region) {
        return ($region == $this->location_region);
    }

    /**
     * @param $markers
     * @param $isElementToBold
     * @param $columns
     */
    public static function createMarkerList($markers){
        $result = '';
        $columns = DB::connection()->getSchemaBuilder()->getColumnListing("markers");

        foreach ($markers as $marker) {
            $result .= '<p>';
            foreach ($columns as $column_name) {
                foreach (array_keys(Marker::$displayNames) as $displayNameKey) {
                    $isElementToBold = in_array($displayNameKey, Marker::$elementsToBold);
                    if (($marker->$column_name) && ($column_name == $displayNameKey)) {
                        $result .= '<p style=\'margin-top: 0; margin-bottom: 0\'>';
                    if ($isElementToBold) {
                        $result .= '<b>';
                    }
                    if (!$isElementToBold) {
                        $result .= Marker::$displayNames[$displayNameKey] . ': ';
                    }
                    $result .= $marker->$column_name;
                    if ($isElementToBold)
                    {
                        $result .= '</b>';
                    }
                        $result .= '</p>';
                    }
                }
            }
            $result .= '</p>';
        }
        return $result;
    }

    /**
     * @return mixed
     */
    public static function getCinicsWithModality($modality)
    {
        return DB::table('markers')
            ->where('modalities.name', '=', (Config::get('constants.' . $modality)))
            ->join('marker_modality', 'markers.id', '=', 'marker_modality.marker_id')
            ->join('modalities', 'marker_modality.modality_id', '=', 'modalities.id')
            ->select('markers.id', 'markers.name', 'markers.address', 'markers.lat', 'markers.lng', 'markers.created_at', 'markers.updated_at', 'markers.phone', 'markers.fax', 'markers.openinghours', 'markers.email', 'markers.info', 'markers.location_region')
            ->paginate(3);
    }

    public static function createClinicList($path)
    {
        $markers = Marker::getCinicsWithModality($path);
        if (count($markers) > 0) {
            $result = '<h2>' . Config::get('constants.' . $path) . ' clinics</h2>';
            $result .= '<p>';
            $result .= Marker::createMarkerList($markers);
            $result .= $markers->links();
            $result .= '</p>';
            return $result;
        } else {
            return '';
        }
    }
}