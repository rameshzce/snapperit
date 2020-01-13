<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = date("Y-m-d H:i:s");

        \DB::table('albums')->delete();

        for ($i = 1; $i < 26; $i++) {
            \DB::table('albums')->insert(
                array(
                    'name' => 'Album ' . $i,
                    'created_at' => $date,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                )
            );
        }
    }
}
