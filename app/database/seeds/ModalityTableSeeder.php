<?php

class ModalityTableSeeder extends Seeder {

    public function run()
    {
        DB::table('modalities')->delete();

		$modality = Modality::create(array(
			'name' => 'General X-Ray'
		));
		
		$modality = Modality::create(array(
			'name' => 'Ultrasound'
		));
		
		$modality = Modality::create(array(
			'name' => 'Doppler'
		));
		
		$modality = Modality::create(array(
			'name' => 'CT'
		));
		
		$modality = Modality::create(array(
			'name' => 'OPG'
		));
		
		$modality = Modality::create(array(
			'name' => 'Bone Densitometry'
		));
		
		$modality = Modality::create(array(
			'name' => 'Echocardiography'
		));
		
		$modality = Modality::create(array(
			'name' => 'Mammography'
		));
		
		$modality = Modality::create(array(
			'name' => 'MRI'
		));

        $modality = Modality::create(array(
            'name' => 'Low Dose CT'
        ));

        $modality = Modality::create(array(
            'name' => 'CT Angiography'
        ));

        $modality = Modality::create(array(
            'name' => 'Digital OPG'
        ));

        $modality = Modality::create(array(
            'name' => 'Fluoroscopy'
        ));

        $modality = Modality::create(array(
            'name' => 'Nuclear Medicine'
        ));
    }
}