<?php

use Illuminate\Database\Seeder;

class SubmajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Submajor::create([
           'name' => 'Networking',
            'major_id' => 3
        ]);
        \App\Models\Submajor::create([
            'name' => 'IOT',
            'major_id' => 3

        ]);
        \App\Models\Submajor::create([
            'name' => 'Big Data and Cloud',
            'major_id' => 3

        ]);
        \App\Models\Submajor::create([
            'name' => 'Security',
            'major_id' => 3

        ]);
    }
}
