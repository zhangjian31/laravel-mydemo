<?php

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'zhangsan2',
            'age' => 21,
            'sex' => 1
        ]);
        Student::create([
            'name' => 'lisi2',
            'age' => 22,
            'sex' => 1
        ]);
        Student::create([
            'name' => 'xiaohong2',
            'age' => 18,
            'sex' => 2
        ]);
    }
}
