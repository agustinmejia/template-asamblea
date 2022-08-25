<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicationsCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publications_categories')->delete();
        
        \DB::table('publications_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Legislatura',
                'slug' => 'legislatura',
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:19:22',
                'updated_at' => '2022-08-25 00:19:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Promulgaciones',
                'slug' => 'promulgaciones',
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:19:43',
                'updated_at' => '2022-08-25 00:19:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Varios',
                'slug' => 'varios',
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:19:48',
                'updated_at' => '2022-08-25 00:19:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}