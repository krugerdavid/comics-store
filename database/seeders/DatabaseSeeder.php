<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTypeSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(DemographySeeder::class);
        $this->call(ProductStatusSeeder::class);
        $this->call(ProductsSeeder::class);

    }
}
