<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degrees = config('degrees');
        foreach($degrees as $degree){
            $new_degree = new Degree();
            $new_degree->name = $degree['name'];
            $new_degree->department_id = $degree['department_id'];
            $new_degree->level = $degree['level'];
            $new_degree->address = $degree['address'];
            $new_degree->email = $degree['email'];
            $new_degree->website = $degree['website'];
            $new_degree->save();
        }
    }
}
