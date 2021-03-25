<?php

namespace Database\Seeders;

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
        $this->call(CommitteesSeeder::class);
        $this->call(LeadersSeeder::class);
        // $this->call(ContactsSeeder::class);
        // $this->call(MailingsSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(ThanksSeeder::class);
    }
}
