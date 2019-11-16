<?php

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::create([
            'name'        => 'Bob Marley',
            'school_mail' => 'bobmarley@mtu.edu.mm',
            'password'    => bcrypt('password'),
            'student_id'  => 'MTU-1995',
            'type'        => 'stu',
            'major_id'    => 1,
            'roll_no'     => 17
        ]);
    }
}
