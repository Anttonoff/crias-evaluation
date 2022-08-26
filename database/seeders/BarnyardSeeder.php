<?php

namespace Database\Seeders;

use App\Models\Barnyard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarnyardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barnyard::factory()->count(20)->create();
    }
}
