<?php

class MarkersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('markers')->delete();
        
        // Our test marker(s)
        // Head office
/*
		$marker = Marker::create(array(
			'name' => 'Capital Radiology Head Office',
			'address' => 'Level 3, 81 Lorimer Street, Docklands, VIC 3008',
			'lat' => '-37.824346',
			'lng' => '144.942316'
		));
*/

		function add_modalities(&$local_marker, $local_modalities_short_codes) {
			foreach($local_modalities_short_codes as $short_code) {
				$local_modality = Modality::where('name', '=', Config::get('constants.'.$short_code))->firstOrFail();	
				$local_marker->modalities()->attach($local_modality->id);
			}
		}

        // Broadford
        $marker = Marker::create(array(
            'name' => 'Broadford',
            'address' => '81 High Street Broadford VIC 3658',
            'lat' => '-37.204205',
            'lng' => '145.046741'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler'
        );
        add_modalities($marker, $modalities_short_codes);

		// Brunswick
		$marker = Marker::create(array(
			'name' => 'Brunswick',
			'address' => '9 Blyth Street Brunswick VIC 3056',
			'lat' => '-37.765394',
			'lng' => '144.963656'
		));
		$modalities_short_codes = array(
			'general_xray',
			'ultrasound',
			'doppler',
			'ct',
			'opg'
		);
		add_modalities($marker, $modalities_short_codes);
		
		// Epping
		$marker = Marker::create(array(
			'name' => 'Epping',
			'address' => '2 Supply Drive Epping VIC 3076',
			'lat' => '-37.660000',
			'lng' => '145.026277'
		));
		$modalities_short_codes = array(
			'general_xray',
			'ultrasound',
			'doppler',
			'ct',
			'opg',
			'echocardiography'
		);
		add_modalities($marker, $modalities_short_codes);

        // Glenroy
        $marker = Marker::create(array(
            'name' => 'Glenroy',
            'address' => '163 Wheatsheaf Road Glenroy VIC 3046',
            'lat' => '-37.706306',
            'lng' => '144.918556'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'opg'
        );
        add_modalities($marker, $modalities_short_codes);

        // Kilmore Imaging
        $marker = Marker::create(array(
            'name' => 'Kilmore Imaging',
            'address' => 'Rutledge Street Kilmore VIC 3764',
            'lat' => '-37.301622',
            'lng' => '144.958031'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'ct'
        );
        add_modalities($marker, $modalities_short_codes);

		$faker = Faker\Factory::create();
		 
		for ($i = 0; $i < 50; $i++)
		{
			$marker = Marker::create(array(
				'name' => $faker->lastName,
				'address' => $faker->address,
				'lat' => $faker->latitude,
				'lng' => $faker->longitude
			  ));
			
			$modalities_short_codes = array(
				$faker->randomElement(
					$array = array (
						'general_xray',
						'ultrasound',
						'doppler',
						'ct',
						'opg',
						'bone_densitometry',
						'echocardiography',
						'mammography',
						'mri'
					)
				)
			);
			add_modalities($marker, $modalities_short_codes);
		}        
    }
}