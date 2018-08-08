<?php

use Illuminate\Database\Seeder;

class WarrantySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Warranty::class, 10)->create();

    }
}
