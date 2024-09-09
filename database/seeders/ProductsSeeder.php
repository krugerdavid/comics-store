<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Storage;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $oldata = \DB::connection('mysql-yuki')->table('producto')->get();

        Storage::makeDirectory('upload/products/filename');

        foreach ($oldata as $data)
        {
            $product_image_small_url = basename($data->producto_image_small_url);
            $product_image_small_path = basename($data->producto_image_small_path);
            $product_image_big_url = basename($data->producto_image_big_url);
            $product_image_big_path = basename($data->producto_image_big_path);
            Products::create([
                'category_id' => $data->categoria_id,
                'name'  => $data->producto_nombre,
                'slug'  => $data->producto_slug,
                'release'  => $data->producto_novedad,
                'offer'  => $data->producto_oferta,
                'intro'  => $data->producto_intro,
                'description'  => $data->producto_descripcion,
                'presale'  => $data->producto_preventa,
                'featured'  => $data->producto_destacado,
                'status'  => $data->producto_status,
                'filename'  => '/upload/products/filename/'. $data->producto_file_name,
                'image_small_url'  => str_replace('https://yukicomics.com.py/upload/producto/'.$product_image_small_url,'/upload/products/'.$product_image_small_url,$data->producto_image_small_url),
                'image_small_path'  => str_replace('/home/yukicomicscom/public_html/upload/producto/'.$product_image_small_path,'/upload/products/'.$product_image_small_path,$data->producto_image_small_path),
                'image_big_url'  => str_replace('https://yukicomics.com.py/upload/producto/'.$product_image_big_url,'/upload/products/'.$product_image_big_url,$data->producto_image_big_url),
                'image_big_path'  => str_replace('https://yukicomics.com.py/upload/producto/'.$product_image_big_path,'/upload/products/'.$product_image_big_path,$data->producto_image_big_path),
                'product_status_id'  => $data->producto_estado,
                'demography_id'  => $data->producto_demografia,
            ]);
        }
    }
}
