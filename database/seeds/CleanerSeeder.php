<?php

use Illuminate\Database\Seeder;

class CleanerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\Cleaner::class, 50)->create()->each(function ($cleaner) {
			$len = random_int(1, 3);
			for ($i = 0; $i < $len; $i++)
				$cleaner->photos()->save(factory(App\Photo::class)->make());
		});

	}
}
