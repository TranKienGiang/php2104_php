<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        User::factory(10)->create(); // create 10 users

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
=======
        // \App\Models\User::factory(10)->create();
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
    }
}
