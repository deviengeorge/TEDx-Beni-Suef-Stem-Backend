<?php

namespace Database\Seeders;

use App\Models\Committee;
use Illuminate\Database\Seeder;

class CommitteesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Committee::create([
            "title" => "Management Board"
        ]);

        Committee::create([
            "title" => "HR Committee"
        ]);

        Committee::create([
            "title" => "Public Relations Committee"
        ]);

        Committee::create([
            "title" => "FundRasing Committee"
        ]);

        Committee::create([
            "title" => "Social Media Committee"
        ]);

        Committee::create([
            "title" => "Content Writing Committee"
        ]);

        Committee::create([
            "title" => "Graphic Design Committee"
        ]);

        Committee::create([
            "title" => "Video Editing Committee"
        ]);

        Committee::create([
            "title" => "Coaching Committee"
        ]);

        Committee::create([
            "title" => "Organizing Committee"
        ]);

        Committee::create([
            "title" => "Technical Support Committee"
        ]);
    }
}
