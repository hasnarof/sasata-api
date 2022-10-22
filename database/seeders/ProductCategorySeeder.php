<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
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
                'name' => 'Pakaian',
            ],
            [
                'id' => 2,
                'name' => 'Aksesoris',
            ],
            [
                'id' => 3,
                'name' => 'Buku, Film dan Musik',
            ],
            [
                'id' => 4,
                'name' => 'Produk Kecantikan',
            ],
            [
                'id' => 5,
                'name' => 'Alat dapur',
            ],
            [
                'id' => 6,
                'name' => 'Furnitur',
            ],
            [
                'id' => 7,
                'name' => 'Dekorasi dan Seni'
            ],
            [
                'id' => 8,
                'name' => 'Alat-alat Rumah Tangga'
            ],
            [
                'id' => 9,
                'name' => 'Alat-alat Perkebunan'
            ],
            [
                'id' => 10,
                'name' => 'Elektronik'
            ],
            [
                'id' => 11,
                'name' => 'Mainan'
            ],
            [
                'id' => 12,
                'name' => 'Peralatan Olahraga'
            ],
        ];
        DB::table('product_categories')->insert($items);
    }
}
