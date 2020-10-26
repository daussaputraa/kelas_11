<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert banyak data
        $data = [
            ['name'=>'Finance'],
            ['name'=>'IT Enginering'],
            ['name'=>'Administration'],
            ['name'=>'Operation'],
        ];

        foreach($data as $d){
            DB::table('departments')->insert([
                'name'  => $d['name']
            ]);
        }
    }
}
