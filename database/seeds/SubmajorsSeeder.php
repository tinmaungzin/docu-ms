<?php

use App\Models\Submajor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Submajor::query()->truncate();

        Submajor::create([
            'name'     => 'Networking',
            'major_id' => 3
        ]);
        Submajor::create([
            'name'     => 'IOT',
            'major_id' => 3

        ]);
        Submajor::create([
            'name'     => 'Big Data and Cloud',
            'major_id' => 3

        ]);
        Submajor::create([
            'name'     => 'Security',
            'major_id' => 3
        ]);
        Submajor::create([
            'name'     => 'Artificial Intelligence and Data Science',
            'major_id' => 3
        ]);
        Submajor::create([
            'name'     => 'Image Processing',
            'major_id' => 3
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
