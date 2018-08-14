<?php

use Illuminate\Database\Seeder;

class StrapSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\Strap::class, 50)->create()->each(function ($strap) {
			$len = random_int(2, 4);
			for ($i = 0; $i < $len; $i++)
				$strap->photos()->save(factory(App\Photo::class)->make());
			for ($i = 0; $i < $len * 2; $i++)
				$strap->comments()->save(factory(App\Comment::class)->make());
			for ($i = 0; $i < $len / 2; $i++)
				$strap->tags()->save(factory(App\Tag::class)->make());
		});
	}
}
