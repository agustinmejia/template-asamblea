<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publications')->delete();
        
        \DB::table('publications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'publications_type_id' => 1,
                'user_id' => NULL,
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'tags' => NULL,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
                'publish_date' => '2022-08-25',
                'enact_date' => '2022-08-25',
                'file' => '[{"download_link":"publications\\/August2022\\/fc8pl2MzjxrpzwSGmubL.pdf","original_name":"sample.pdf"}]',
                'status' => 1,
                'view' => NULL,
                'created_at' => '2022-08-25 23:08:16',
                'updated_at' => '2022-08-25 23:08:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}