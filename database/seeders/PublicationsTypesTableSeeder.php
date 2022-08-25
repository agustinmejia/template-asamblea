<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicationsTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publications_types')->delete();
        
        \DB::table('publications_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'publications_category_id' => 1,
                'title' => 'Leyes sancionadas',
                'slug' => 'leyes-sancionadas',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:21:03',
                'updated_at' => '2022-08-25 00:21:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'publications_category_id' => 1,
                'title' => 'Leyes promulgadas',
                'slug' => 'leyes-promulgadas',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:21:13',
                'updated_at' => '2022-08-25 00:21:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'publications_category_id' => 2,
                'title' => 'Resoluciones',
                'slug' => 'resoluciones',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:21:31',
                'updated_at' => '2022-08-25 00:23:04',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'publications_category_id' => 3,
                'title' => 'PIEs',
                'slug' => 'pies',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:21:43',
                'updated_at' => '2022-08-25 00:23:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'publications_category_id' => 3,
                'title' => 'PIOs',
                'slug' => 'pios',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'created_at' => '2022-08-25 00:23:31',
                'updated_at' => '2022-08-25 00:23:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}