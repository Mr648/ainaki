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
            $len = random_int(2, 4);
            for ($i = 0; $i < $len; $i++)
                $lens->photos()->save(factory(App\Photo::class)->make());
            for ($i = 0; $i < $len*2; $i++)
                $lens->comments()->save(factory(App\Comment::class)->make());
            for ($i = 0; $i < $len/2; $i++)
                $lens->tags()->save(factory(App\Tag::class)->make());


            $lens->warranty()->save(factory(App\Warranty::class)->make());
        });
    }
}
