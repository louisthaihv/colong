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
            ],
            [
                "name" => "Hướng dẫn",
            ],
            [
                "name" => "Tính năng",
            ],
            [
                "name" => "Thư viện",
            ],
            [
                "name" => "Sự kiện",
            ],
            [
                "name" => "Cẩm nang",
            ],
            [
                "name" => "Bí kíp",
            ],
            [
                "name" => "Tính năng hàng ngày",
            ],
         ];

         Category::insert($data);
    }
}
