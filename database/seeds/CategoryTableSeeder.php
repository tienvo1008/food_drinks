<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array('name'=>'Foods', 'description'=>'Foods', 'parent_id'=>0, 'sort_order'=>1),
            array('name'=>'Drinks', 'description'=>'Drinks', 'parent_id'=>0, 'sort_order'=>1),
            array('name'=>'Món Mặn', 'description'=>'Cơm', 'parent_id'=>1, 'sort_order'=>1),
            array('name'=>'Món chay', 'description'=>'Món chay', 'parent_id'=>1, 'sort_order'=>1),
            array('name'=>'Đô ăn vặt', 'description'=>'Đô ăn vặt', 'parent_id'=>1, 'sort_order'=>1),
            array('name'=>'Hải sản', 'description'=>'Hải sản', 'parent_id'=>1, 'sort_order'=>1),
            array('name'=>'Nước tăng lực', 'description'=>'Nước tăng lực', 'parent_id'=>2, 'sort_order'=>1),
            array('name'=>'Nước giải khác', 'description'=>'Nước giải khác', 'parent_id'=>2, 'sort_order'=>1),
            array('name'=>'Trà sữa', 'description'=>'Trà sữa', 'parent_id'=>2, 'sort_order'=>1),
            array('name'=>'Cafe', 'description'=>'Cafe', 'parent_id'=>2, 'sort_order'=>1),
        ]);
    }
}
