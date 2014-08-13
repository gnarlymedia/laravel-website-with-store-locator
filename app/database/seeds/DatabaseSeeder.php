<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
        $this->call('SiteTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('PatientTableSeeder');
        $this->call('ModalityTableSeeder');
        $this->call('MarkersTableSeeder');
//        $this->call('PostTableFakeSeeder');
        $this->call('LinkTableSeeder');
	}
}

/*
class ReferrerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('referrers')->delete();

		$faker = Faker\Factory::create();
		 
		for ($i = 0; $i < 20; $i++)
		{
			'code' => $faker->bothify($string = '#####?'),
			'expiryDate' => $faker->optional()->dateTimeThisCentury->format('d-m-Y'),
			'title' => $faker->optional()->prefix,
			'surname' => $faker->optional()->lastName,
			'firstName' => $faker->optional()->firstName,
			'otherNames' => $faker->optional()->firstName,
			'gender' => $faker->text($maxNbChars = 6),
			'address' => $faker->address,
			'medicareProviderNumber' => $faker->text($maxNbChars = 100),
			'pacsAliasID' => $faker->optional()->text($maxNbChars = 15),
			'homePhone' => $faker->optional()->tollFreePhoneNumber,
			'mobilePhone' => $faker->optional()->tollFreePhoneNumber,
			'workPhone' => $faker->optional()->tollFreePhoneNumber,
			'faxNumber' => $faker->optional()->tollFreePhoneNumber,
			'email' => $faker->optional()->safeEmail,
			'isInvoicingPractitioner' => $faker->optional()->boolean($chanceOfGettingTrue = 50),
			'isReportingPractitioner' => $faker->optional()->boolean($chanceOfGettingTrue = 50),
			'canSuperviseReporting' => $faker->optional()->boolean($chanceOfGettingTrue = 50),
			'financialSites' => $faker->optional()->text($maxNbChars = 25),
			'qualifications' => $faker->optional()->text($maxNbChars = 25),
			'reportingSupervisor' => $faker->optional()->text($maxNbChars = 25),
			'specialities' => $faker->optional()->text($maxNbChars = 35),
			'effectivePractitioner' => $faker->optional()->text($maxNbChars = 25),
			'requestConditions' => $faker->optional()->text($maxNbChars = 25),
			'contactGroups' => $faker->optional()->text($maxNbChars = 15),
			'contactPreferenceTypes' => $faker->optional()->text($maxNbChars = 35),
			'notes' => $faker->optional()->text($maxNbChars = 50),
			'merged' => $faker->optional()->text($maxNbChars = 50)
		  ));
		}        
    }
}
*/

class SiteTableSeeder extends Seeder {

    public function run()
    {
        DB::table('sites')->delete();

        Site::create(array(
        	'name' => 'Albert Park',
        	'addressLine1' => '17 Merton Street',
        	'addressLine2' => '',
        	'addressSuburb' => 'Albert Park',
        	'addressState' => 'Vic',
        	'addressPostcode' => 3206,
        	'openingHours' => 'Mon to Fri 9am-5pm, Sat 9-12pm',
        	'phone' => '03 9690 2377',
        	'fax' => '03 9686 8358',
        	'modalities' => 'Dental X-Ray, General X-Ray'
        ));
    }
}

class AddressTableSeeder extends Seeder {

    public function run()
    {
        DB::table('addresses')->delete();

        Address::create(array(
        	'addressLine1' => '17 Merton Street',
        	'addressLine2' => '',
        	'addressSuburb' => 'Albert Park',
        	'addressState' => 'Vic',
        	'addressPostcode' => 3206
        ));
    }
}