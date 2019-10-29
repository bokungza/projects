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
        $user = new User;
        $user->username = "bokungza";
        $user->role = 'CUSTOMER';
        $user->first_name = "itsales";
        $user->last_name = "singtaweesak";
        $user->email = "itsales@hotmail.com";
        $user->password = Hash::make('123456');
        $user->email_verified_at = now();
        $user->save();
        $user = new User;
          $user->username = "folk";
          $user->role = 'CUSTOMER';
          $user->first_name = "pattalapon";
          $user->last_name = "pontaku";
          $user->email = "folk@gmail.com";
          $user->password = Hash::make('123456');
          $user->email_verified_at = now();
          $user->save();
            factory(App\User::class, 50)->create();

    }
}
