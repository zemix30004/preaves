<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG G8x ThinQ',
                'price' => '200',
                'description' => 'A smartphone with 4gb ram and much other feature',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/in/images/plp-b2c/Category-Selector/OLED65C1PTZ-260.jpg',
            ],
            [
                'name' => 'OLED TV',
                'price' => '800',
                'description' => 'A tvset with smart tv and much other feature',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/in/images/plp-b2c/Category-Selector/OLED65C1PTZ-260.jpg',
            ],
            [
                'name' => 'UHD 4K TV',
                'price' => '900',
                'description' => 'A tvset with smart tv ram and much other feature',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/in/images/plp-b2c/Category-Selector/50UP7750PTZ-260.jpg',
            ],
            [
                'name' => 'LG Notebook',
                'price' => '1000',
                'description' => 'A notebook withand much other feature',
                'category' => 'computer',
                'gallery' => 'https://www.lg.com/in/images/computers/md07536616/thumbnail/14Z90P-G-AJ53A2-350-3.jpg',
            ]
        ]);
    }
}
