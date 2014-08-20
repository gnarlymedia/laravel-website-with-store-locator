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
            'address' => htmlspecialchars('156-158 Millers Road Altona North VIC 3025'),
            'openinghours' => htmlspecialchars('Mon-Fri 9 - 5'),
            'phone' => '03 8378 4988',
            'fax' => '03 9314 1623',
            'lat' => '-37.830772',
            'lng' => '144.848011',
            'location_region' => 'west'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'bone_densitometry'
        );
        add_modalities($marker, $modalities_short_codes);

        // Ashburton
        $marker = Marker::create(array(
            'name' => 'Ashburton',
            'address' => '448 Warrigal Road Ashburton VIC 3147',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 9886 9090',
            'fax' => '03 9886 9958',
            'lat' => '-37.868242',
            'lng' => '145.091948',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray',
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
            'lng' => '144.996040',
            'location_region' => 'south-east'
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

        // Boronia
        $marker = Marker::create(array(
            'name' => 'Boronia',
            'address' => '41 Boronia Road Boronia VIC 3155',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 9754 9488',
            'fax' => '03 9762 0199',
            'lat' => '-37.862425',
            'lng' => '145.292278',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg'
        );
        add_modalities($marker, $modalities_short_codes);

        // Box Hill
        $marker = Marker::create(array(
            'name' => 'Box Hill',
            'address' => 'Suite 2, 28-32 Arnold Street Box Hill VIC 3128',
            'openinghours' => 'Mon - Fri 8.30-5.30 & Sat 9-noon',
            'phone' => '03 8843 6888',
            'fax' => '03 9898 0186',
            'lat' => '-37.813768',
            'lng' => '145.116520',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'cone_beam_ct',
            'ct'
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
            'lng' => '145.046741',
            'location_region' => 'regional'
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
			'lng' => '144.963656',
            'location_region' => 'north'
		));
		$modalities_short_codes = array(
			'general_xray',
			'ultrasound',
			'doppler',
			'ct',
			'opg'
		);
		add_modalities($marker, $modalities_short_codes);

        // Camberwell
        $marker = Marker::create(array(
            'name' => 'Camberwell',
            'address' => 'Unit 2 55 - 59 Avenue Rd Camberwell VIC 3124',
            'openinghours' => 'Mon - Fri 9-5 & Sat 9-noon',
            'phone' => '03 8808 7688',
            'fax' => '03 9813 4455',
            'lat' => '-37.834662',
            'lng' => '145.061335',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct'
        );
        add_modalities($marker, $modalities_short_codes);

        // Cheltenham Jamieson Street
        $marker = Marker::create(array(
            'name' => 'Cheltenham Jamieson Street',
            'address' => 'Suite 4, 10 Jamieson Street Cheltenham VIC 3192',
            'openinghours' => 'Mon-Fri 8.30 - 5.30 & Sat 9 - noon',
            'phone' => '03 9583 2203',
            'fax' => '03 9583 6359',
            'lat' => '-37.960304',
            'lng' => '145.055373',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'fluoroscopy',
            'ultrasound',
            'doppler',
            'mammography',
            'opg',
            'low_dose_ct',
            'bone_densitometry',
            'echocardiography',
            'nuclear_medicine'
        );
        add_modalities($marker, $modalities_short_codes);

        // Cheltenham Nepean Highway
        $marker = Marker::create(array(
            'name' => 'Cheltenham Nepean Highway',
            'address' => '1160 Nepean Highway Cheltenham VIC 3192',
            'openinghours' => 'By appointment',
            'lat' => '-37.959755',
            'lng' => '145.052989',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray'
        );
        add_modalities($marker, $modalities_short_codes);

        // Clayton
        $marker = Marker::create(array(
            'name' => 'Clayton',
            'address' => '1383 Centre Road Clayton VIC 3168',
            'openinghours' => 'Mon-Fri 8.30 - 5.00 & Sat 9 - noon',
            'phone' => '03 9543 1688',
            'fax' => '03 9543 1919',
            'lat' => '-37.928020',
            'lng' => '145.117197',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct',
            'echocardiography'
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
			'lng' => '144.940844',
            'location_region' => 'north'
		));
		$modalities_short_codes = array(
			'general_xray'
		);
		add_modalities($marker, $modalities_short_codes);

        // Dandenong
        $marker = Marker::create(array(
            'name' => 'Dandenong',
            'address' => '54-56 Princes Highway Dandenong VIC 3175',
            'openinghours' => 'Mon-Fri 9 - 5 & Sat 9 - noon',
            'phone' => '03 8788 9888',
            'fax' => '03 9792 2253',
            'lat' => '-37.981591',
            'lng' => '145.211455',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct_angiography',
            'mri',
            'bone_densitometry'
        );
        add_modalities($marker, $modalities_short_codes);

        // Dandenong City
        $marker = Marker::create(array(
            'name' => 'Dandenong City',
            'address' => '9 Pultney Street Dandenong VIC 3175',
            'openinghours' => 'Mon-Fri 9 - 5',
            'phone' => '03 8788 9888',
            'fax' => '03 9794 9927',
            'lat' => '-37.988891',
            'lng' => '145.215264',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray'
        );
        add_modalities($marker, $modalities_short_codes);

        // Dingley
        $marker = Marker::create(array(
            'name' => 'Dingley',
            'address' => '110 Centre Dandenong Road Dingley VIC 3172',
            'openinghours' => 'Mon-Fri 9 - noon',
            'phone' => '03 9558 2155',
            'lat' => '-37.984644',
            'lng' => '145.134048',
            'location_region' => 'south-east'
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
			'lng' => '145.019493',
            'location_region' => 'north'
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
            'lng' => '144.886078',
            'location_region' => 'west'
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
            'lng' => '144.895524',
            'location_region' => 'west'
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
            'lng' => '144.881419',
            'location_region' => 'north'
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
            'lng' => '144.806603',
            'location_region' => 'north'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'opg'
        );
        add_modalities($marker, $modalities_short_codes);

        // Kilmore Imaging
        $marker = Marker::create(array(
            'name' => 'Kilmore Imaging',
            'address' => 'Kilmore Hospital, Rutledge Street Kilmore VIC 3764',
            'openinghours' => 'Mon - Fri 9 - 5',
            'phone' => '03 5734 2118',
            'fax' => '03 5781 1475',
            'lat' => '-37.301638',
            'lng' => '144.958018',
            'location_region' => 'regional'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'ct'
        );
        add_modalities($marker, $modalities_short_codes);

        // Kyneton
        $marker = Marker::create(array(
            'name' => 'Kyneton',
            'address' => '11 Jennings Street Kyneton VIC 3444',
            'openinghours' => 'By appointment',
            'phone' => '03 5422 2722',
            'fax' => '03 5422 3176',
            'lat' => '-37.247654',
            'lng' => '144.450319',
            'location_region' => 'regional'
        ));
        $modalities_short_codes = array(
            'ultrasound',
            'doppler-ultrasound'
        );
        add_modalities($marker, $modalities_short_codes);

        // Mildura Lime Avenue
        $marker = Marker::create(array(
            'name' => 'Mildura Lime Avenue',
            'address' => '93-95 Lime Avenue Mildura VIC 3500',
            'openinghours' => 'Mon - Fri 8.30-5, Sat 9-12',
            'phone' => '03 5051 7777',
            'fax' => '03 5021 5297',
            'lat' => '-34.184985',
            'lng' => '142.157929',
            'location_region' => 'regional'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
            'ct',
            'echocardiography',
            'mammography',
            'mri',
            'bone_densitometry'
        );
        add_modalities($marker, $modalities_short_codes);

        // Mildura Ontario Medical Centre
        $marker = Marker::create(array(
            'name' => 'Mildura Ontario Medical Centre',
            'address' => 'Ontario Medical Centre, 239-241 Thirteenth Street Mildura VIC 3500',
            'openinghours' => 'Mon - Fri 9-1',
            'phone' => '03 5051 7444',
            'fax' => '03 5021 9673',
            'lat' => '-34.184382',
            'lng' => '142.144058',
            'location_region' => 'regional'
        ));
        $modalities_short_codes = array(
            'general_xray'
        );
        add_modalities($marker, $modalities_short_codes);

        // Moorabbin
        $marker = Marker::create(array(
            'name' => 'Moorabbin',
            'address' => 'Suite 2, 999 Nepean Highway Moorabbin VIC 3189',
            'openinghours' => 'Mon-Fri 9 - 5',
            'phone' => '03 8552 8888',
            'fax' => '03 9553 1191',
            'lat' => '-37.934227',
            'lng' => '145.036238',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'opg',
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
            'lng' => '144.892275',
            'location_region' => 'north'
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

        // Rowville Health
        $marker = Marker::create(array(
            'name' => 'Rowville Health',
            'address' => 'Suite 1, 150 Kellets Road Rowville VIC 3178',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 9763 9503',
            'fax' => '03 9763 5946',
            'lat' => '-37.913777',
            'lng' => '145.257259',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray'
        );
        add_modalities($marker, $modalities_short_codes);

        // Rowville Wellness
        $marker = Marker::create(array(
            'name' => 'Rowville Wellness',
            'address' => 'Suite 1, 1101 Wellington Road Rowville VIC 3178',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 9724 7300',
            'fax' => '03 9755 5143',
            'lat' => '-37.926662',
            'lng' => '145.250554',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray'
        );
        add_modalities($marker, $modalities_short_codes);

        // Sandringham
        $marker = Marker::create(array(
            'name' => 'Sandringham',
            'address' => '324 Bluff Road Sandringham VIC 3191',
            'openinghours' => 'Mon-Fri 1:30 - 5',
            'phone' => '03 9598 8040',
            'fax' => '03 9597 0871',
            'lat' => '-37.952568',
            'lng' => '145.020961',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray'
        );
        add_modalities($marker, $modalities_short_codes);

        // Springvale
        $marker = Marker::create(array(
            'name' => 'Springvale',
            'address' => '12-14 Windsor Avenue Springvale VIC 3171',
            'openinghours' => 'Mon-Fri 9 - 5 & Sat 9 - 1',
            'phone' => '03 8558 5888',
            'fax' => '03 9574 0244',
            'lat' => '-37.951959',
            'lng' => '145.149999',
            'location_region' => 'south-east'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'mammography',
            'opg',
            'ct',
            'ct_angiography',
            'bone_densitometry',
            'echocardiography'
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
            'lng' => '144.815516',
            'location_region' => 'west'
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
            'lng' => '144.723070',
            'location_region' => 'north'
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
            'lng' => '144.764350',
            'location_region' => 'north'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'digital_opg',
            'low_dose_ct'
        );
        add_modalities($marker, $modalities_short_codes);

        // Vermont
        $marker = Marker::create(array(
            'name' => 'Vermont',
            'address' => '399-401 Burwood Highway Vermont VIC 3133',
            'openinghours' => 'Mon - Fri 8.30-5.30 & Sat 9-12',
            'phone' => '03 9814 6666',
            'fax' => '03 9886 1955',
            'lat' => '-37.854694',
            'lng' => '145.171817',
            'location_region' => 'east'
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

        // Vermont – MRI & Nuclear Medicine
        $marker = Marker::create(array(
            'name' => 'Vermont - MRI & Nuclear Medicine',
            'address' => '411 Burwood Highway Vermont VIC 3133',
            'openinghours' => 'Nuc Med Mon, Wed & Fri 8.30-5.30 & MRI Mon-Thur 7.00am - 9.00pm & Fri 7.00am - 6.00pm',
            'phone' => '03 9814 6633',
            'fax' => '03 9802 9641',
            'lat' => '-37.854856',
            'lng' => '145.173226',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'nuclear_medicine',
            'mri'
        );
        add_modalities($marker, $modalities_short_codes);

        // Wallan
        $marker = Marker::create(array(
            'name' => 'Wallan',
            'address' => '65 Wellington Street Wallan VIC 3756',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 5783 8388',
            'fax' => '03 5783 1898',
            'lat' => '-37.413840',
            'lng' => '144.977332',
            'location_region' => 'regional'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler',
            'echocardiography'
        );
        add_modalities($marker, $modalities_short_codes);

        // Wantrina
        $marker = Marker::create(array(
            'name' => 'Wantrina',
            'address' => '103 Harold Street Wantrina VIC 3152',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 9801 6697',
            'fax' => '03 9800 0013',
            'lat' => '-37.856940',
            'lng' => '145.228159',
            'location_region' => 'east'
        ));
        $modalities_short_codes = array(
            'general_xray'
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
            'lng' => '144.668821',
            'location_region' => 'west'
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
            'lng' => '144.897057',
            'location_region' => 'west'
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

        // Woodend
        $marker = Marker::create(array(
            'name' => 'Woodend',
            'address' => 'Cnr Brooke and Templeton Streets Woodend VIC 3442',
            'openinghours' => 'Mon - Fri 9-5',
            'phone' => '03 5427 1002',
            'fax' => '03 5427 2623',
            'lat' => '-37.359526',
            'lng' => '144.529800',
            'location_region' => 'regional'
        ));
        $modalities_short_codes = array(
            'general_xray',
            'ultrasound',
            'doppler-ultrasound',
            'opg'
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