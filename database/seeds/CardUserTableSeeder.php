<?php

use Illuminate\Database\Seeder;
use App\CardUser;
class CardUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardUser::truncate();
        $data=[
        	['user_name'=>3, 'card_id'=>1, 'card_code'=>1234567789,"card_series"=>25357312478, 'value'=>50000],
        ];
        Carduser::insert($data);
    }
}
