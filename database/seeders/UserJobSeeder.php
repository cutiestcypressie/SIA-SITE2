<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserJobSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbluserjob')->insert([
            [
                'jobid' => 1,
                'jobname' => 'Software Engineer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jobid' => 2,
                'jobname' => 'Web Developer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
} 