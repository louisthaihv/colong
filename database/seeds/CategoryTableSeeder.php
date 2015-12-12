<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
         $data = [
            [
                "name" => "Tin tức",
                "type"=>2,
                "image_url"=>""
            ],
            [
                "name" => "Hướng dẫn",
                "type" => 1,
                "image_url" =>"frontend/images/navbar/huong-dan.png"
            ],
            [
                "name" => "Đặc trưng",
                "type" => 1,
                "image_url" =>"frontend/images/navbar/dac-trung.png"
            ],
            [
                "name" => "Hoạt động",
                "type"=>1,
                "image_url"=>"frontend/images/navbar/hoat-dong.png",
            ],
            [
                "name" => "Cộng đồng",
                "type"=>1,
                "image_url"=>"frontend/images/navbar/cong-dong.png"
            ],
            [
                "name" => "Clip games",
                "type" =>3,
                "image_url"=>"frontend/images/images/clip-game.png"
            ],
            [
                "name" => "Wall paper",
                "type"=>3,
                "image_url"=>"frontend/images/images/wallpaper.png",
            ],
            [
                "name" => "Screenshot",
                "type" =>3,
                "image_url"=>"frontend/images/images/screenshot.png"
            ],[
                "name" => "gift code",
                "type" =>0,
                "image_url"=>"frontend/images/button/gift-code.png"
            ],[
                "name" => "the vip",
                "type" =>0,
                "image_url"=>"frontend/images/button/the-vip.png"
            ],[
                "name" => "tru thu",
                "type" =>0,
                "image_url"=>"frontend/images/button/tro-thu.png"
            ],[
                "name" => "Thu cuuoi",
                "type" =>0,
                "image_url"=>"frontend/images/button/thu-cuoi.png"
            ],[
                "name" => "trang bi",
                "type" =>0,
                "image_url"=>"frontend/images/button/trang-bi.png"
            ],[
                "name" => "Mon phai",
                "type" =>0,
                "image_url"=>"frontend/images/button/mon-phai.png"
            ],
         ];

         Category::insert($data);
    }
}
