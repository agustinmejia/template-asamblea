<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpdateBreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenuItemsTableSeeder::class,
        ]);
    }
}
