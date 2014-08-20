<?php

class LinkTableSeeder extends Seeder {

    public function run()
    {
        DB::table('links')->delete();

        // Our test link
        $link = Link::create(array(
            'title' => 'Capital Radiology',
            'content' => 'Capital Radiology website',
            'url' => 'http://capitalradiology.com.au/'
        ));

        // Another test link
        $link = Link::create(array(
            'title' => 'Capitol Health',
            'content' => 'Capitol Health website',
            'url' => 'http://capitolhealth.com.au/',
            'status' => 'APPROVED'
        ));

		$faker = Faker\Factory::create();
		
		for ($i = 0; $i < 10; $i++)
		{
			$link = Link::create(
				array(
                    'title' => $faker->sentence($nbWords = 2),
                    'content' => $faker->sentence($nbWords = 4),
                    'url' => $faker->url,
                    'status' => $faker->randomElement(
                        $array = array (
                            'DRAFT',
                            'APPROVED'
                        )
                    )
				)
			);
		}
    }
}