<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('students')->count()==0){
            DB::table('students')->insert([
                [
                'id' =>1,
                'name'=>"aaaa",
                'address'=> 'NV A',
                'university'=>"CNTT",
                'class_id'=>"1"
               
            ],
            [
                'id' =>2,
                'name'=>"Pt13313",
                'address'=> 'NV b',
                'university'=>"CNTT",
                'class_id'=>"2"
            ],
            [
                'id' =>3,
                'name'=>"13314",
                'address'=> 'NV M',
                'university'=>"Marketing",
                'class_id'=>"3"
            ],
        ]);
        }
    }
}
