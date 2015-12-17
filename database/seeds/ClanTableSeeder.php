<?php

use Illuminate\Database\Seeder;
use App\Clan;

class ClanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *images
     * @return void
     */
    public function run()
    {
        Clan::truncate();
        $data=[

        	[
        		'name'=>"Pháp Tôn",
        		'description'=>'Pháp tôn gắn liền sinh mạng với phép thuật và coi đó là
							lẽ sống của cuộc đời mình. Họ được mọi người tôn trọng vì luôn
							diệt trừ tà đạo và phục vụ hết mình cho chính nghĩa. Họ có
							năng lực phép thuật tiềm năng rất mạnh cũng như khả năng dịch
							chuyển mọi thứ.',
                'image_url'=>'frontend/images/clans/1.jpg',
        	],[
        		'name'=>"Kiếm Tông",
        		'description'=>'Vận dụng ngũ hành tạo nên những pháp thuật gây sát
							thương chấn động trời đất, với thần kiếm trên tay hệ tu luyện
							này có thể càn quét cả 1 ngôi làng trong nháy mắt!',
        		'image_url'=>'frontend/images/clans/2.jpg',
        	],[
        		'name'=>"Thích Khách",
        		'description'=>'Là hệ tu luyện với vũ khí sắc bén, khinh công thoắt ẩn
							thoắt hiện trong đêm. Được biết đến với năng lực ẩn thân độc
							nhất vô nhị và tốc độ công kích nhanh, gây sát thương gần cực
							mạnh.',
        		'image_url'=>'frontend/images/clans/3.jpg',
        	],[
                'name'=>"Bút Phái",
                'description'=>'Hệ tu phái bí ẩn nhất với vũ khí là 1 cây bút lớn, mỗi
                            nét vẽ của Bút Phái là 1 chiêu thức khiến đối thủ lâm vào
                            trạng thái hư ảo không thể tẩu thoát!',
                'image_url'=>'frontend/images/clans/4.jpg',
            ],[
                'name'=>"Bút Phái",
                'description'=>'Hệ tu phái bí ẩn nhất với vũ khí là 1 cây bút lớn, mỗi
                            nét vẽ của Bút Phái là 1 chiêu thức khiến đối thủ lâm vào
                            trạng thái hư ảo không thể tẩu thoát!',
                'image_url'=>'frontend/images/clans/5.jpg',
            ],[
                'name'=>"Bút Phái",
                'description'=>'Hệ tu phái bí ẩn nhất với vũ khí là 1 cây bút lớn, mỗi
                            nét vẽ của Bút Phái là 1 chiêu thức khiến đối thủ lâm vào
                            trạng thái hư ảo không thể tẩu thoát!',
                'image_url'=>'frontend/images/clans/6.jpg',
            ],[
                'name'=>"Bút Phái",
                'description'=>'Hệ tu phái bí ẩn nhất với vũ khí là 1 cây bút lớn, mỗi
                            nét vẽ của Bút Phái là 1 chiêu thức khiến đối thủ lâm vào
                            trạng thái hư ảo không thể tẩu thoát!',
                'image_url'=>'frontend/images/clans/7.jpg',
            ],[
        		'name'=>"Bút Phái",
        		'description'=>'Hệ tu phái bí ẩn nhất với vũ khí là 1 cây bút lớn, mỗi
							nét vẽ của Bút Phái là 1 chiêu thức khiến đối thủ lâm vào
							trạng thái hư ảo không thể tẩu thoát!',
        		'image_url'=>'frontend/images/clans/8.jpg',
        	],

        ];
        Clan::insert($data);
    }
}
