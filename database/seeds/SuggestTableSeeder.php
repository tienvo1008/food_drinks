<?php

use Illuminate\Database\Seeder;

class SuggestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suggests')->insert([
            array('user_id'=>1, 'content'=>'trà sữa trân châu', 'status'=> true),
            array('user_id'=>3, 'content'=>'trà sữa trân châu', 'status'=> false),
            array('user_id'=>4, 'content'=>'trà sữa trân châu', 'status'=> false),
            array('user_id'=>5, 'content'=>'trà sữa trân châu', 'status'=> false),
            array('user_id'=>2, 'content'=>'trà sữa trân châu', 'status'=> true),
            array('user_id'=>1, 'content'=>'trà sữa trân châu', 'status'=> true),
        ]);
    }
}
