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
        });
    }
}
