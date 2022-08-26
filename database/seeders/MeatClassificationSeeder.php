<?php

namespace Database\Seeders;

use App\Models\MeatClassification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MeatClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MeatClassification::create([
                            'slug' => Str::random(10),
                            'type' => 1,
                            'name' => 'Grasa Tipo 1'
                        ]);

        MeatClassification::create([
                            'slug' => Str::random(10),
                            'type' => 2,
                            'name' => 'Grasa Tipo 2'
                        ]);
    }
}
