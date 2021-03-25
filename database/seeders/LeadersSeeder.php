<?php

namespace Database\Seeders;

use App\Models\Leader;
use Illuminate\Database\Seeder;

class LeadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leader::create([
            "name" => "Yussof Waleed",
            "title" => "Chairman",
            "image" => "www.facebook.com",
            "committee_id" => 1
        ]);

        Leader::create([
            "name" => "Ahmed Sayed",
            "title" => "Co-Chairman",
            "image" => "www.facebook.com",
            "committee_id" => 1
        ]);

        Leader::create([
            "name" => "Salma Ahmed",
            "title" => "CEO",
            "image" => "www.facebook.com",
            "committee_id" => 1
        ]);

        Leader::create([
            "name" => "Salma Ahmed",
            "title" => "Multi-Media Chief",
            "image" => "www.facebook.com",
            "committee_id" => 1
        ]);

        Leader::create([
            "name" => "Mohamed Hisham",
            "title" => "Digital-Marketing Chief",
            "image" => "www.facebook.com",
            "committee_id" => 1
        ]);

        Leader::create([
            "name" => "Karem Nabil",
            "title" => "PR & FR Chief",
            "image" => "www.facebook.com",
            "committee_id" => 1
        ]);
    }
}
