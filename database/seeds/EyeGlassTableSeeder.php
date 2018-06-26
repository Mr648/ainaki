<?php

use Illuminate\Database\Seeder;

class EyeGlassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EyeGlass::class, 50)->create()->each(function ($eyeGlass) {
            $eyeGlass->photos()->save(factory(App\Photo::class)->make());
        });
    }
}
