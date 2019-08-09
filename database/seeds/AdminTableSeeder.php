<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('admins')->count()==0) {
            # code...
            DB::table('admins')->insert([
                [
                    'name'=>'a',
                    'university'=>'FPT School',
                    'class_id'=>'1',
                    'is_active'=>'1'
                ],
                [
                    'name'=>'a',
                    'university'=>'FPT School',
                    'class_id'=>'1',
                    'is_active'=>'0'
                ],
                [
                    'name'=>'a',
                    'university'=>'FPT School',
                    'class_id'=>'1',
                    'is_active'=>'1'
                ]

            ]);
        }
    }
}
