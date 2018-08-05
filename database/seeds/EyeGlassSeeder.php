<?php

use Illuminate\Database\Seeder;

class EyeGlassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EyeGlass::class, 50)->create()->each(function ($eyeGlass) {
            $len = random_int(2, 8);
            for ($i = 0; $i < $len; $i++)
                $eyeGlass->photos()->save(factory(App\Photo::class)->make());
        });
    }
}
