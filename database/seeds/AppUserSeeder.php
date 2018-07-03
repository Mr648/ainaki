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
            $len = random_int(2, 8);
            for ($i = 0; $i < $len; $i++){
                $user->photos()->save(factory(App\Photo::class)->make());

            }
        });
    }
}
