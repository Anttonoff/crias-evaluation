<?php

namespace Database\Seeders;

use App\Models\BarnyardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BarnyardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BarnyardType::create([
                    'slug' => Str::random(10),
                    'type' => 1,
                    'name' => 'general'
                ]);

        BarnyardType::create([
                            'slug' => Str::random(10),
                            'type' => 2,
                            'name' => 'cuarentena'
                        ]);
    }
}
