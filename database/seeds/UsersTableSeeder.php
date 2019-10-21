<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
        $user->username = "zelos";
        $user->role = 'ADMIN';
        $user->first_name = "sikharin";
        $user->last_name = "kadeeroj";
        $user->email = "zelos@hotmail.com";
        $user->password = Hash::make('123456');
        $user->email_verified_at = now();
        $user->save();

    }
}
