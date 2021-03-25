<?php

namespace Database\Seeders;

use App\Models\Thank;
use Illuminate\Database\Seeder;

class ThanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thank::create([
            "name" => "Youssef Ahmed",
            "content" => "For His potentials in coding the website."
        ]);

        Thank::create([
            "name" => "Habiba Yahia",
            "content" => "For her efforts in developing FR Committee."
        ]);

        Thank::create([
            "name" => "Mr. Hamdy Zahran",
            "content" => "For His help in finding event's hosting venue."
        ]);

        Thank::create([
            "name" => "Youssef Attia",
            "content" => "For His help in editing Training videos."
        ]);
    }
}
