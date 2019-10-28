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
          $user->username = "folkky";
          $user->role = 'CUSTOMER';
          $user->first_name = "kyky";
          $user->last_name = "tyty";
          $user->email = "k@t.com";
          $user->password = Hash::make('123456');
          $user->email_verified_at = now();
          $user->save();
          $user = new User;
            $user->username = "kwangky";
            $user->role = 'CUSTOMER';
            $user->first_name = "kyky";
            $user->last_name = "tyty";
            $user->email = "itsales.s@ku.th";
            $user->password = Hash::make('025898489');
            $user->email_verified_at = now();
            $user->save();
            factory(App\User::class, 50)->create();

    }
}
