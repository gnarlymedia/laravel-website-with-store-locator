<?php

class MarkersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('markers')->delete();
        DB::table('marker_modality')->delete();
        
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

        // Altona North
        $marker = Marker::create(array(
            'name' => 'Altona North',
            'address' => '156-158 Millers Road Altona North VIC 3025',
            'openinghours' => 'Mon-Fri 9 - 5',
            'phone' => '03 8378 4988',
            'fax' => '03 9314 1623',
            'lat' => '-37.830772',
            'lng' => '144.848011'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'bone_densitometry'
        );
        add_modalities($marker, $modalities_short_codes);

        // Balaclava
        $marker = Marker::create(array(
            'name' => 'Balaclava',
            'address' => 'Suite 5, 285 Carlisle Street Balaclava VIC 3183',
            'openinghours' => 'Mon-Fri 8.30 - 6.00 & Sat 9 - 1',
            'phone' => '03 8552 9552',
            'fax' => '03 9527 3788',
            'lat' => '-37.869563',
            'lng' => '144.996040'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'low_dose_ct',
            'ct_angiography',
            'echocardiography'
        );
        add_modalities($marker, $modalities_short_codes);

        // Broadford
        $marker = Marker::create(array(
            'name' => 'Broadford',
            'address' => '81 High Street Broadford VIC 3658',
            'openinghours' => 'Tues - Thurs 8:30-1',
            'phone' => '03 5783 8388 (All appointments through Wallan)',
            'fax' => '03 5783 1898',
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
            'openinghours' => 'Mon - Fri 9 - 5 & Sat 9 - noon',
            'phone' => '03 9387 9900',
            'fax' => '03 9387 9911',
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
		
		// Craigieburn
		$marker = Marker::create(array(
			'name' => 'Craigieburn',
			'address' => '21 Craigieburn Road Craigieburn VIC 3064',
            'openinghours' => 'Mon-Fri 9 - 5',
            'phone' => '0384018431',
            'fax' => '0394013979',
			'lat' => '-37.599297',
			'lng' => '144.940844'
		));
		$modalities_short_codes = array(
			'general_xray'
		);
		add_modalities($marker, $modalities_short_codes);
		
		// Epping
		$marker = Marker::create(array(
			'name' => 'Epping',
			'address' => 'Unit 1, 500 High Street Epping VIC 3076',
            'openinghours' => 'Mon-Fri 8:30 - 7 & Sat 9 - 4',
            'phone' => '03 8401 8401',
            'fax' => '03 9401 3979',
			'lat' => '-37.659017',
			'lng' => '145.019493'
		));
		$modalities_short_codes = array(
			'general_xray',
			'ultrasound',
			'low_dose_ct',
			'opg',
			'mri'
		);
		add_modalities($marker, $modalities_short_codes);

        // Footscray
        $marker = Marker::create(array(
            'name' => 'Footscray',
            'address' => 'Western Private Hospital, Cnr Eleanor and Marion Streets Footscray VIC 3011',
            'openinghours' => 'Mon-Fri 8.30 - 5.30 & Sat 9 - 1. MRI opening hours: Mon-Fri 7.00am - 7.00pm & Sat 9.00am - 1.00pm',
            'phone' => '03 9236 4088',
            'fax' => '03 9317 0899',
            'email' => 'wph@capitalradiology.com.au',
            'lat' => '-37.792983',
            'lng' => '144.886078'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'fluoroscopy',
            'ultrasound',
            'doppler',
            'mammography',
            'opg',
            'low_dose_ct',
            'ct_angiography',
            'bone_densitometry',
            'mri',
            'nuclear_medicine'
        );
        add_modalities($marker, $modalities_short_codes);

        // Footscray Central
        $marker = Marker::create(array(
            'name' => 'Footscray Central',
            'address' => '81 Paisley Street Footscray VIC 3011',
            'openinghours' => 'Mon-Fri 8.30 - 5',
            'phone' => '03 9688 2888',
            'fax' => '03 9687 9485',
            'lat' => '-37.800451',
            'lng' => '144.895524'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct',
            'ct_angiography',
            'echocardiography'
        );
        add_modalities($marker, $modalities_short_codes);

        // Greenvale
        $marker = Marker::create(array(
            'name' => 'Greenvale',
            'address' => '1 Greenvale Drive Greenvale VIC 3059',
            'openinghours' => 'Mon-Fri 9 - 5 (X-Ray only), Sat 9 - 1 (Ultrasound only)',
            'phone' => '03 8401 8471',
            'fax' => '03 9401 3979',
            'lat' => '-37.639999',
            'lng' => '144.881419'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound'
        );
        add_modalities($marker, $modalities_short_codes);

        // Keilor Downs
        $marker = Marker::create(array(
            'name' => 'Keilor Downs',
            'address' => 'Unit 2-3, 8 Copernicus Way Keilor Downs VIC 3038',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 8312 7088',
            'fax' => '03 9364 0570',
            'lat' => '-37.723914',
            'lng' => '144.806603'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'opg'
        );
        add_modalities($marker, $modalities_short_codes);

        // Kilmore Imaging
        $marker = Marker::create(array(
            'name' => 'Kilmore Imaging',
            'address' => 'Rutledge Street Kilmore VIC 3764',
            'openinghours' => 'Mon - Fri 9 - 5',
            'phone' => '03 5734 2118',
            'fax' => '03 5781 1475',
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

        // Niddrie
        $marker = Marker::create(array(
            'name' => 'Niddrie',
            'address' => '1 Treadwell Road Niddrie VIC 3042',
            'openinghours' => 'Mon-Fri 8:30 - 6:30  & Sat 9 - 1. <br />MRI opening hours: Mon-Fri 7.00am - 7.00pm & Sat 9.00am-1.00pm',
            'phone' => '03 9334 3434',
            'fax' => '03 9379 0011',
            'lat' => '-37.736513',
            'lng' => '144.892275'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct',
            'low_dose_ct',
            'echocardiography',
            'ct_angiography',
            'mri'
        );
        add_modalities($marker, $modalities_short_codes);

        // St Albans
        $marker = Marker::create(array(
            'name' => 'St Albans',
            'address' => '151-153 Furlong Road St Albans VIC 3021',
            'openinghours' => 'Mon-Fri 8.30 - 5 & Sat 9 - 1',
            'phone' => '03 8312 7888',
            'fax' => '03 9356 0158',
            'lat' => '-37.761020',
            'lng' => '144.815516'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'mammography',
            'ct',
            'ct_angiography',
            'nuclear_medicine',
            'opg'
        );
        add_modalities($marker, $modalities_short_codes);

        // Sunbury
        $marker = Marker::create(array(
            'name' => 'Sunbury',
            'address' => '51 Ligar Street Sunbury VIC 3429',
            'openinghours' => 'Mon-Fri 9 - 7 & Sat 9 - 1',
            'phone' => '03 9218 7288',
            'fax' => '03 9740 2600',
            'lat' => '-37.579388',
            'lng' => '144.723070'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg'
        );
        add_modalities($marker, $modalities_short_codes);

        // Sydenham
        $marker = Marker::create(array(
            'name' => 'Sydenham',
            'address' => '530 Melton Highway Sydenham VIC 3037',
            'openinghours' => 'Mon-Fri 9 - 5 & Sat 9 - 1',
            'phone' => '03 8361 4488',
            'fax' => '03 9449 3066',
            'lat' => '-37.693894',
            'lng' => '144.764350'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'digital_opg',
            'low_dose_ct'
        );
        add_modalities($marker, $modalities_short_codes);

        // Werribee
        $marker = Marker::create(array(
            'name' => 'Werribee',
            'address' => '27 Princes Highway Werribee VIC 3030',
            'openinghours' => 'Mon-Fri 9 - 5',
            'phone' => '03 8734 3222',
            'fax' => '03 9741 1585',
            'lat' => '-37.898663',
            'lng' => '144.668821'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct'
        );
        add_modalities($marker, $modalities_short_codes);

        // Williamstown
        $marker = Marker::create(array(
            'name' => 'Williamstown',
            'address' => '89 Ferguson Street Williamstown VIC 3016',
            'openinghours' => 'Mon-Fri 8.30 - 5.30 & Sat 9 - 1',
            'phone' => '03 9399 6000',
            'fax' => '03 9397 4811',
            'lat' => '-37.859131',
            'lng' => '144.897057'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct',
            'ct_angiography'
        );
        add_modalities($marker, $modalities_short_codes);

//		$faker = Faker\Factory::create();
//
//		for ($i = 0; $i < 50; $i++)
//		{
//			$marker = Marker::create(array(
//				'name' => $faker->lastName,
//				'address' => $faker->address,
//				'lat' => $faker->latitude,
//				'lng' => $faker->longitude
//			  ));
//
//			$modalities_short_codes = array(
//				$faker->randomElement(
//					$array = array (
//						'general_xray',
//						'ultrasound',
//						'doppler',
//						'ct',
//						'opg',
//						'bone_densitometry',
//						'echocardiography',
//						'mammography',
//						'mri',
//                        'low_dose_ct',
//                        'ct_angiography',
//                        'digital_opg',
//					)
//				)
//			);
//			add_modalities($marker, $modalities_short_codes);
//		}
    }
}