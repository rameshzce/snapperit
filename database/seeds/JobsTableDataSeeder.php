<?php

use Illuminate\Database\Seeder;

class JobsTableDataSeeder extends Seeder
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

        \DB::table('jobs')->delete();

        for ($i = 1; $i < 26; $i++) {
            for ($j = 1; $j < 5; $j++) {
                \DB::table('jobs')->insert(
                    array(
                        'name' => "Job_" . $i . "_" . $j,
                        'album_id' => $i,
                        'file_location' => "file_" . $i . "_" . $j . ".zip",
                        'created_at' => $date,
                        'updated_at' => NULL,
                        'deleted_at' => NULL,
                    )
                );
            }
        }


    }
}
