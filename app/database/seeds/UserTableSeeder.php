<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
		
		$faker = Faker\Factory::create();
		
		for ($i = 0; $i < 20; $i++)
		{
		
			$password = $faker->word;
		
			$user = User::create(
				array(
				    'email' => $faker->email,
				    'password' => $password,
					'password_confirmation' => $password,
					'dob' => $faker->date($format = 'd/m/Y', $max = 'now'),
					'first_name' => $faker->firstName,
					'surname' => $faker->lastName,
					'phone_number' => $faker->randomNumber($nbDigits = 8)
				)
			);
/* 	        $this->command->info('var_dump($user): ' + var_dump($user)); */
		}
		
		// Our test user
		$user = User::create(array(
			'email' => 'capitalradio12345@gmail.com',
			'password' => 'capital123',
			'password_confirmation' => 'capital123',
			'dob' => '25/04/2008',
			'first_name' => 'Capital',
			'surname' => 'Radiology',
			'phone_number' => 1234567890
		));

        // Another test user
        $user = User::create(array(
            'email' => 's.hudson@capitalradiology.com.au',
            'password' => 'capital123',
            'password_confirmation' => 'capital123',
            'dob' => '25/04/2008',
            'first_name' => 'Capital',
            'surname' => 'Radiology',
            'phone_number' => 1234567890
        ));
		
/*         $this->command->info('var_dump($user): ' + var_dump($user)); */
    }
}