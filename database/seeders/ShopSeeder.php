<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('shops')->insertGetId([
            'title' => 'Hoff',
            'url' => 'https://hoff.ru',
            'created_at' => DB::raw('NOW()'),
        ]);
        DB::table('shops')->insertGetId([
            'title' => 'Sokolov',
            'url' => 'https://sokolov.ru',
            'created_at' => DB::raw('NOW()'),
        ]);
        DB::table('shops')->insertGetId([
            'title' => 'Alibaba',
            'url' => 'https://alibaba.com',
            'created_at' => DB::raw('NOW()'),
        ]);
        DB::table('shops')->insertGetId([
            'title' => 'Metro',
            'url' => 'https://metro-cc.ru',
            'created_at' => DB::raw('NOW()'),
        ]);
        DB::table('shops')->insertGetId([
            'title' => 'Decathlon',
            'url' => 'https://decathlon.ru',
            'created_at' => DB::raw('NOW()'),
        ]);
    }
}
