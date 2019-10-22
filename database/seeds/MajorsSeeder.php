<?php

use Illuminate\Database\Seeder;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Major::create([
            'name'=> 'Civil Engineering'
        ]);
        \App\Models\Major::create([
            'name'=> 'Mechanical Engineering'
        ]);
        \App\Models\Major::create([
            'name'=> 'Computer Engineering and Information Technology'
        ]);
        \App\Models\Major::create([
            'name'=> 'Electronic Engineering'
        ]);
        \App\Models\Major::create([
            'name'=> 'Chemical Engineering'
        ]);
        \App\Models\Major::create([
            'name'=> 'Electrical Power Engineering'
        ]);
        \App\Models\Major::create([
            'name'=> 'Architecture'
        ]);
    }
}
