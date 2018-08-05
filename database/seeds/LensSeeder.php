<?php

use Illuminate\Database\Seeder;

class LensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lens::class, 50)->create()->each(function ($lens) {
            $len = random_int(2, 3);
            for ($i = 0; $i < $len; $i++)
                $lens->photos()->save(factory(App\Photo::class)->make());
        });
    }
}
