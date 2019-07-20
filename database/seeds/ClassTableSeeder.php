<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('classes')->count()==0){
            DB::table('classes')->insert([
                [
                'id' =>1,
                'name'=>"Pt13312",
                'teacher_name'=> 'NV A',
                'major'=>"CNTT",
                'max_student'=>50
            ],
            [
                'id' =>2,
                'name'=>"Pt13313",
                'teacher_name'=> 'NV b',
                'major'=>"CNTT",
                'max_student'=>20
            ],
            [
                'id' =>3,
                'name'=>"13314",
                'teacher_name'=> 'NV M',
                'major'=>"Marketing",
                'max_student'=>30
            ],
        ]);
        }
        
    }
}
