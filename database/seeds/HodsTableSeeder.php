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
            'school_mail' => 'hod@mail.com',
            'password' => bcrypt('000'),
            'major_id' => 3
        ]);
    }
}
