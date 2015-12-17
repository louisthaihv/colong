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
        	['title'=>"VT",'name'=>'Viettel', 'image'=>'images/viettel.jpg'],
        	['title'=>"MOBI",'name'=>'Mobiphone', 'image'=>'images/mobi.jpg'],
            ['title'=>"VINA",'name'=>'Vinaphone', 'image'=>'images/vina.jpg'],
        	['title'=>"GATE",'name'=>'FPT Gate', 'image'=>'images/fpt.jpg'],
        ];
        Card::insert($data);
    }
}
