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
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
=======
      $this->call(UsersTableSeeder::class);
>>>>>>> be013394efe2774827ef8499fa5fe3921c423bca
        //$this->call(PaysTableSeeder::class);
    }
}
