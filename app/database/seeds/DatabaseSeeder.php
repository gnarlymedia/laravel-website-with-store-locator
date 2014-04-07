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

        $this->command->info('Site table seeded!');
	}
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

		$faker = Faker\Factory::create();
		 
		for ($i = 0; $i < 100; $i++)
		{
		  $user = User::create(array(
		    'username' => $faker->userName,
		    'email' => $faker->email,
		    'password' => $faker->word
		  ));
		}        
    }
}

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