<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'item_name' => '茨城産 にんじん',
            'price' => '1000',
            'explain' => '産地直送で新鮮です。',
            'image' => '',
            'order_condition' => '1kg単位、1kg以上から発注可能',
            'item_num' => '1',
            'stock' => '100',
            ],
            [
            'item_name' => '長野産 りんご',
            'price' => '1500',
            'explain' => '産地直送で新鮮です。',
            'image' => '',
            'order_condition' => '1kg単位、1kg以上から発注可能',
            'item_num' => '2',
            'stock' => '150',
            ],
            [
            'item_name' => 'ボルドー赤ワイン2016',
            'price' => '1500',
            'explain' => '内容量720ml',
            'image' => '',
            'order_condition' => '注文後3営業日以内に発送',
            'item_num' => '3',
            'stock' => '50',
            ]
        ]);
    }
}
