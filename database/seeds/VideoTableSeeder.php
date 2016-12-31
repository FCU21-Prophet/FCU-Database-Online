<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i=0 ; $i<10 ; $i++ )
        {
            DB::table('video')->insert
            ([
                'name' => str_random(10),
                'running_time' => rand(0,1000),
                'country' => str_random(2),
                'url' => str_random(30),
                'introduction' => str_random(100),
            ]);
        }
    }
}
