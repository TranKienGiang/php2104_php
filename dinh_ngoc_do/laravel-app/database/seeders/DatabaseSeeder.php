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
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
        User::factory(10)->create();

        $this->call([
            ProductsSeeder::class,
            CategoriesSeeder::class,
        ]);
=======
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
    }
}
