<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Bancada MAS-IPSP',
                'slug' => 'bancada-mas-ipsp',
                'details' => NULL,
                'created_at' => '2022-09-09 09:19:52',
                'updated_at' => '2022-09-09 09:23:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Bancada MTS',
                'slug' => 'bancada-mts',
                'details' => NULL,
                'created_at' => '2022-09-09 09:20:05',
                'updated_at' => '2022-09-09 09:23:26',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Bancada TODOS',
                'slug' => 'bancada-todos',
                'details' => NULL,
                'created_at' => '2022-09-09 09:20:44',
                'updated_at' => '2022-09-09 09:23:43',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Bancada Indigenas',
                'slug' => 'bancada-indigenas',
                'details' => NULL,
                'created_at' => '2022-09-09 09:20:57',
                'updated_at' => '2022-09-09 09:23:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Bancada Campesino',
                'slug' => 'bancada-campesino',
                'details' => NULL,
                'created_at' => '2022-09-09 09:24:04',
                'updated_at' => '2022-09-09 09:24:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}