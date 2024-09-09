<?php

namespace Database\Seeders;

use App\Models\ProductStatus;
use Illuminate\Database\Seeder;

class ProductStatusSeeder extends Seeder
{
    public function run(): void
    {
        $oldata = $old_data = \DB::connection('mysql-yuki')->table('producto_estado')->get();

        foreach ($oldata as $data)
        {
            ProductStatus::create([
                'name' => $data->pr_estado_nombre,
            ]);
        }
    }
}
