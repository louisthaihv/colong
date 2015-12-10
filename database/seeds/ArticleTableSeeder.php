<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $data=[
        	[
        		'category_id'=>1,
        		'user_id'=>1,
        		'title'=>'Khai mở máy chủ mới : Hà Tiên Cô',
        		'image_url'=>'images/tintuc/article1.png',
                'content'=>'Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.',
        		'description'=>'Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />Đặt chân đến vùng đất tiên cảnh mới, khám phá những tính năng độc đáo và trải nghiệm chinh phục những thử thách khắc nghiệt trên con đường tu tiên luôn là niềm khao khát của các đồng đạo.<br />',
        	],
        	[
        		'category_id'=>2,
        		'user_id'=>1,
        		'title'=>'Hướng dẫn nạp thẻ',
        		'image_url'=>'images/huongdan/article2.jpg',
                'content'=>'Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất',
        		'description'=>'Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />Hướng dẫn người chơi nạp thẻ một cách thuận tiện nhất<br />',
        	],
        	[
        		'category_id'=>3,
        		'user_id'=>1,
        		'title'=>'Thần Binh',
        		'image_url'=>'images/tinhnang/article3.png',
                'content'=>'Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.',
        		'description'=>'Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />Hệ thống Thần Binh không những giúp cho nhân vật của bạn trở nên thật tuyệt hảo, còn có thuộc tính gia tăng EXP vô thượng trên con đường tu luyện.<br />',
        	],
        	[
        		'category_id'=>4,
        		'user_id'=>1,
        		'title'=>'image',
        		'image_url'=>'images/thuvien/article4.jpg',
                'content'=>null,
                'description'=>null,
        	],
        	[
        		'category_id'=>5,
        		'user_id'=>1,
        		'title'=>'Thủ Hộ Tiên Nữ',
        		'image_url'=>'images/sukien/article5.png',
                'content'=>'Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...',
        		'description'=>'Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />Thủ Hộ Tiên Nữ là hoạt động như các hoạt động Mỹ Nữ Đồng Du, nhận nhiệm vụ mỗi ngày tại NPB. Các Đạo Hữu sẽ nhận được lượng EXP,...<br />',
        	],
        	[
        		'category_id'=>6,
        		'user_id'=>1,
        		'title'=>'Tìm Đường Tự Động',
        		'image_url'=>'images/camnang/article6.jpg',
                'content'=>'Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.',
        		'description'=>'Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />Sau đây là một vài hướng dẫn để game thủ dễ dàng hơn trong việc kiểm soát khả năng di chuyển và định hướng vị trí trong thế giới tu tiên huyền bí.<br />',
        	],
        ];

        Article::insert($data);
    }
}
