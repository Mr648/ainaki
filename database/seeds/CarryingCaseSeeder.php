<?php

use Illuminate\Database\Seeder;

class CarryingCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CarryingCase::class, 50)->create()->each(function ($carryingCase) {
            $len = random_int(1,3);
            for ($i = 0; $i < $len; $i++)
                $carryingCase->photos()->save(factory(App\Photo::class)->make());
        });
    }
}
