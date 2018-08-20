<?php

use Illuminate\Database\Seeder;

class AppUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AinakiUser::class, 10)->create()->each(function ($user) {
            $user->photos()->save(factory(App\Photo::class)->states('avatar')->make());
        });
    }
}
