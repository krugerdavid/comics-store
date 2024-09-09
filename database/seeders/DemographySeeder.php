<?php

namespace Database\Seeders;

use App\Models\Demography;
use Illuminate\Database\Seeder;

class DemographySeeder extends Seeder
{
    public function run(): void
    {
        $old_data = \DB::connection('mysql-yuki')->table('demografia')->get();

        foreach ($old_data as $data)
        {
            Demography::create([
                'name' => $data->demografia_nombre,
            ]);
        }
    }
}
