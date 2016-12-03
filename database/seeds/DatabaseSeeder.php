<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
    }
}
