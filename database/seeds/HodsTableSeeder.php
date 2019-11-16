<?php

use App\Models\Hod;
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
        Hod::query()->truncate();

        Hod::create([

            'name' => 'hod_ceit',
            'school_mail' => 'hod@mtu.edu.mm',
            'password' => bcrypt('000'),
            'type' => 'hod',
            'major_id' => 3
        ]);
    }
}
