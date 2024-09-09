<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $olddata = \DB::connection('mysql-yuki')->table('categoria')->get();

        foreach ($olddata as $data){
            Category::create([
                'name' => $data->categoria_nombre,
                'parent' => $data->categoria_parent,
                'left' => $data->categoria_left,
                'right' => $data->categoria_right,
                'status' => $data->categoria_status,
            ]);
        }
    }
}
