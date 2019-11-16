<?php

use Illuminate\Database\Seeder;

class HodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hod::create([

            'name' => 'hod_ceit',
            'school_mail' => 'hod@mtu.edu.mm',
            'password' => bcrypt('000'),
            'type' => 'hod',
            'major_id' => 3
        ]);
    }
}
