<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'product_id' => 1,
                'image' => 'images/products/product1.jpeg',
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'image' => 'images/products/product2.jpeg',
            ],
            [
                'id' => 3,
                'product_id' => 2,
                'image' => 'images/products/product2_2.jpeg',
            ],

        ];
        DB::table('product_images')->insert($items);
    }
}
