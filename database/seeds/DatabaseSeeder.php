<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MajorsSeeder::class);
         $this->call(SubmajorsSeeder::class);
         $this->call(HodsTableSeeder::class);
    }
}
