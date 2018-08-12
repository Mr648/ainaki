<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EyeGlassSeeder::class);
        $this->call(StrapSeeder::class);
        $this->call(AppUserSeeder::class);
        $this->call(LensSeeder::class);
        $this->call(CarryingCaseSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(WarrantySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CleanerSeeder::class);
    }
}
