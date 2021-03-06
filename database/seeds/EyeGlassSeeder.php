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
        factory(App\EyeGlass::class, 20)->create()->each(function ($eyeGlass) {
            $len = random_int(2, 8);
            // save some photos for eyeglass

            for ($i = 0; $i < $len; $i++)
                $eyeGlass->photos()->save(factory(App\Photo::class)->make());

            // putting some fake comments for product
            for ($i = 0; $i < $len * 2; $i++)
                $eyeGlass->comments()->save(factory(App\Comment::class)->make());

            // saving tags for this eyeglass
            for ($i = 0; $i < $len / 2; $i++)
                $eyeGlass->tags()->save(factory(App\Tag::class)->make());

            //save a warranty for eyeglass
            $eyeGlass->warranty()->save(factory(App\Warranty::class)->make());
        });
    }
}
