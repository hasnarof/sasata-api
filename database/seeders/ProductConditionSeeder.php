<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductConditionSeeder extends Seeder
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
                'name' => 'Baru',
            ],
            [
                'id' => 2,
                'name' => 'Jarang dipakai',
            ],
            [
                'id' => 3,
                'name' => 'Sering dipakai, rusak minor',
            ],
            [
                'id' => 4,
                'name' => 'Sering dipakai, rusak mayor',
            ],
        ];
        DB::table('product_conditions')->insert($items);
    }
}
