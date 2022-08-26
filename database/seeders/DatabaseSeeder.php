<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $this->call([
                BarnyardTypeSeeder::class,
                BarnyardSeeder::class,
                MeatClassificationSeeder::class,
                ProviderSeeder::class,
                CalfSeeder::class,
                RolePermissionSeeder::class,
                UserSeeder::class,
            ]);
    }
}
