<?php

class PatientTableSeeder extends Seeder {

    public function run()
    {
        DB::table('patients')->delete();

		$faker = Faker\Factory::create();
		 
		for ($i = 0; $i < 20; $i++)
		{
		  $patient = Patient::create(array(
			'patientID' => $faker->randomNumber($nbDigits = 6),
			'medicareNumber' => $faker->numerify($string = '##########-#'),
			'surname' => $faker->lastName,
			'firstName' => $faker->firstName,
			'pensionNumber' => $faker->optional()->bothify($string = '#########?'),
			'otherNames' => $faker->optional()->firstName,
			'vetAffairsNumber' => $faker->optional()->bothify($string = '##??????#'),
			'generalNote' => $faker->optional()->text($maxNbChars = 200),
			'accountingNote' => $faker->optional()->text($maxNbChars = 200),
			'medicalAlert' => $faker->optional()->text($maxNbChars = 10),
			'registrationNote' => $faker->optional()->text($maxNbChars = 50),
			'gender' => $faker->text($maxNbChars = 6),
			'DOB' => $faker->dateTimeThisCentury->format('d-m-Y'),
			'ethnicity' => $faker->optional()->text($maxNbChars = 20),
			'homePhone' => $faker->optional()->randomNumber($nbDigits = 10),
			'mobilePhone' => $faker->optional()->randomNumber($nbDigits = 10),
			'workPhone' => $faker->optional()->randomNumber($nbDigits = 10),
			'faxNumber' => $faker->optional()->randomNumber($nbDigits = 10),
			'email' => $faker->optional()->safeEmail,
			'dateDeceased' => $faker->optional()->date($format = 'd-m-Y', $max = 'now'),
			'address' => $faker->address,
			'condition' => $faker->optional()->text($maxNbChars = 30),
			'user_id' => $faker->randomNumber(1, 5)
		  ));
		}        
    }
}