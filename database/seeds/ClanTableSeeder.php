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
                'title_url'=>'frontend/images/phap-ton.png',
                'slide_url'=>'frontend/images/phap-ton.png',
        		'back_ground_image_url'=>'frontend/images/s11.png',
        	],[
        		'name'=>"Kiếm Tông",
        		'description'=>'Vận dụng ngũ hành tạo nên những pháp thuật gây sát
							thương chấn động trời đất, với thần kiếm trên tay hệ tu luyện
							này có thể càn quét cả 1 ngôi làng trong nháy mắt!',
        		'title_url'=>'frontend/images/kiem-tong.png',
                'slide_url'=>'frontend/images/kiem-tong.png',
                'back_ground_image_url'=>'frontend/images/kiemtong.png',
        	],[
        		'name'=>"Thích Khách",
        		'description'=>'Là hệ tu luyện với vũ khí sắc bén, khinh công thoắt ẩn
							thoắt hiện trong đêm. Được biết đến với năng lực ẩn thân độc
							nhất vô nhị và tốc độ công kích nhanh, gây sát thương gần cực
							mạnh.',
        		'title_url'=>'frontend/images/thich-khach.png',
                'slide_url'=>'frontend/images/thich-khach.png',
                'back_ground_image_url'=>'frontend/images/thichkhach.png',
        	],[
        		'name'=>"Bút Phái",
        		'description'=>'Hệ tu phái bí ẩn nhất với vũ khí là 1 cây bút lớn, mỗi
							nét vẽ của Bút Phái là 1 chiêu thức khiến đối thủ lâm vào
							trạng thái hư ảo không thể tẩu thoát!',
        		'title_url'=>'frontend/images/but-phai.png',
                'slide_url'=>'frontend/images/but-phai.png',
                'back_ground_image_url'=>'frontend/images/butphai.png',
        	],

        ];
        Clan::insert($data);
    }
}
