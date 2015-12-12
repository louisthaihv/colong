<?php

use Illuminate\Database\Seeder;
use App\Card;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::truncate();
        $data=[
        	['name'=>'Viettel', 'image'=>'images/viettel.jpg'],
        	['name'=>'Mobiphone', 'image'=>'images/mobi.jpg'],
            ['name'=>'Vinaphone', 'image'=>'images/vina.jpg'],
        	['name'=>'FPT', 'image'=>'images/fpt.jpg'],
        ];
        Card::insert($data);
    }
}
