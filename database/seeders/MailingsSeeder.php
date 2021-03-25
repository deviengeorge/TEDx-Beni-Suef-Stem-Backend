<?php

namespace Database\Seeders;

use App\Models\Mailing;
use Illuminate\Database\Seeder;

class MailingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mailing::factory()->count(4)->create();
    }
}
