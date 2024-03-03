<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jinguShops = [
            'サーティワンアイスクリーム',
            '築地銀だこ',
            "選手グルメのお店 ～Player's Kitchen～",
            'きっちんくるりんぱ内野店',
            'つばめ食堂',
            'ポテトマニア',
            'だんまや水産',
            'うどんとぼんた',
            '丼とぼんた',
            '欅 けやき',
            'スタジアムカレー',
            'ウインナーとビールのお店',
            '黒ぶたや シュウマイとぶた丼',
            'ルウ・ジャパン',
            '利久 GUTS LAND',
            '大阪焼肉・ホルモン ふたご',
            'ピザーラエクスプレス',
            '鉄板酒場 鐵一',
            'Pink dot.',
            '塚田農場スタンド',
            '横浜家系ラーメン 壱角家',
            '情熱のすためし どんどん',
            '築地場外市場 神宮球場店',
            '神保町焼きそば みかさ威風',
            '宮崎餃子専門店 おざわ',
            '築地銀だこ TOKYO STADIUM',
            'スタジアム売店',
            'お弁当ワゴン',
            'ハッピーケバブ',
            "D'sスタジアムステーキ",
            'くるりんぱきっちんかー',
            '青空キッチン',
            'じんカラ専門キッチンカー',
            'HUNTINGTONS HOTDOG',
            'ドミノピザワゴン',
            'ポップコーンワゴン',
        ];

        foreach ($jinguShops as $shopName ) {
            $shop = [
                'name' => $shopName,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('shops')->insert($shop);
        }
    }
}
