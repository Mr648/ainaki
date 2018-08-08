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
        factory(App\EyeGlass::class, 10)->create()->each(function ($eyeGlass) {
            $len = random_int(2, 8);
            for ($i = 0; $i < $len; $i++)
                $eyeGlass->photos()->save(factory(App\Photo::class)->make());
            for ($i = 0; $i < $len*2; $i++)
                $eyeGlass->comments()->save(factory(App\Comment::class)->make());
            for ($i = 0; $i < $len/2; $i++)
                $eyeGlass->tags()->save(factory(App\Tag::class)->make());
        });
    }
}
