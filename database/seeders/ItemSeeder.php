<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'ランチコース',
                'memo' => 'ランチコースの詳細',
                'price' => 4000,
            ],
            [
                'name' => 'アフタヌーンティー',
                'memo' => 'アフタヌーンティーの詳細',
                'price' => 3000,
            ],
            [
                'name' => 'ディナーコース',
                'memo' => 'ディナーコースの詳細',
                'price' => 8000,
            ],
        ]);
    }
}
