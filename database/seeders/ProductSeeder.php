<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
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
                'name' => 'FISIKA DASAR HALLIDAY EDISI 7',
                'description' => 'Original, berat 2 kg. Masih bagus.',
                'price' => '50000',
                'category_id' => '3',
                'seller_id' => '2',
                'condition' => 'Sering dipakai, rusak minor',
                'status' => 'available',
                'is_cod' => true,
                'address' => 'Komplek Pelni no. 2',
                'province_id' => '32',
                'city_id' => '3276',
                'created_at' => date_create("2022-01-31"),
                'updated_at' => date_create("2022-01-31"),
            ],
            [
                'id' => 2,
                'name' => 'SEJARAH PEMINATAN KELAS 10/X SMA ERLANGGA',
                'description' => 'Original, berat 2 kg. Masih bagus.',
                'price' => '60000',
                'category_id' => '3',
                'seller_id' => '2',
                'condition' => 'Sering dipakai, rusak minor',
                'status' => 'available',
                'is_cod' => true,
                'address' => 'Komplek Pelni no. 2',
                'province_id' => '32',
                'city_id' => '3276',
                'created_at' => date_create("2022-01-31"),
                'updated_at' => date_create("2022-01-31"),
            ],
        ];

        DB::table('products')->insert($items);
    }
}
