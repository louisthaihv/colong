<?php

use Illuminate\Database\Seeder;
use App\GiftUser;
class GiftUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GiftUser::truncate();
        $data=[
        	['user_id'=>3, 'gift_id'=>1],
        ];
        GiftUser::insert($data);
    }
}
