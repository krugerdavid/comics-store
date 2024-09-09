<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    public function run(): void
    {
        UserType::create([
            'type' => 1,
            'name' => 'admin'
        ]);

        UserType::create([
            'type' => 2,
            'name' => 'user'
        ]);
    }
}
