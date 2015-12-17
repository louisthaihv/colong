<?php

use Illuminate\Database\Seeder;
use App\DailyEvent;
class DailyEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DailyEvent::truncate();
        	$data = [
        		[
        			'weekly_id'=>1,
        			'name'=>'Đoạt Bảo',
                    'start_time'=>'00',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>1,
        			'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'01',
        			'end_time'=>"12",
        		],
        		[
        			'weekly_id'=>1,
        			'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'06',
        			'end_time'=>'13',
        		],
        		[
        			'weekly_id'=>1,
        			'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>'07',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>1,
        			'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'05',
        			'end_time'=>'10',
        		],
        		[
        			'weekly_id'=>1,
        			'name'=>'Quân Doanh',
                    'start_time'=>'07',
        			'end_time'=>'08',
        		],
        		[
        			'weekly_id'=>2,
        			'name'=>'Đoạt Bảo',
                    'start_time'=>'02',
        			'end_time'=>'02',
        		],
        		[
        			'weekly_id'=>2,
        			'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'02',
        			'end_time'=>'03',
        		],
        		[
        			'weekly_id'=>2,
        			'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'04',
        			'end_time'=>'05',
        		],
        		[
        			'weekly_id'=>2,
        			'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>0,
        			'end_time'=>24,
        		],
        		[
        			'weekly_id'=>2,
        			'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'05',
        			'end_time'=>'06',
        		],
        		[
        			'weekly_id'=>2,
        			'name'=>'Quân Doanh',
                    'start_time'=>'06',
        			'end_time'=>'07',
        		],
        		[
        			'weekly_id'=>3,
        			'name'=>'Đoạt Bảo',
                    'start_time'=>'7',
        			'end_time'=>'08',
        		],
        		[
        			'weekly_id'=>3,
        			'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'07',
        			'end_time'=>'08',
        		],
        		[
        			'weekly_id'=>3,
        			'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'01',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>3,
        			'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>'01',
        			'end_time'=>'21',
        		],
        		[
        			'weekly_id'=>3,
        			'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'09',
        			'end_time'=>'13',
        		],
        		[
        			'weekly_id'=>3,
        			'name'=>'Quân Doanh',
                    'start_time'=>'09',
        			'end_time'=>'11',
        		],
				[
        			'weekly_id'=>4,
        			'name'=>'Đoạt Bảo',
                    'start_time'=>'10',
        			'end_time'=>'20',
        		],
        		[
        			'weekly_id'=>4,
        			'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'04',
        			'end_time'=>'04',
        		],
        		[
        			'weekly_id'=>4,
        			'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'08',
        			'end_time'=>'21',
        		],
        		[
        			'weekly_id'=>4,
        			'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>'08',
        			'end_time'=>'21',
        		],
        		[
        			'weekly_id'=>4,
        			'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'09',
        			'end_time'=>'10',
        		],
        		[
        			'weekly_id'=>4,
        			'name'=>'Quân Doanh',
                    'start_time'=>'01',
        			'end_time'=>'12',
        		],
				[
        			'weekly_id'=>5,
        			'name'=>'Đoạt Bảo',
                    'start_time'=>'01',
        			'end_time'=>'01',
        		],
        		[
        			'weekly_id'=>5,
        			'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'01',
        			'end_time'=>'21',
        		],
        		[
        			'weekly_id'=>5,
        			'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'06',
        			'end_time'=>'07',
        		],
        		[
        			'weekly_id'=>5,
        			'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>'01',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>5,
        			'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'10',
        			'end_time'=>'13',
        		],
        		[
        			'weekly_id'=>5,
        			'name'=>'Quân Doanh',
                    'start_time'=>'20',
        			'end_time'=>'20',
        		],
				[
                    'weekly_id'=>6,
                    'name'=>'Đoạt Bảo',
                    'start_time'=>'09',
                    'end_time'=>'10',
                ],
                [
                    'weekly_id'=>6,
                    'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'11',
                    'end_time'=>'12',
                ],
                [
                    'weekly_id'=>6,
                    'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'13',
                    'end_time'=>'14',
                ],
                [
                    'weekly_id'=>6,
                    'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>'15',
                    'end_time'=>'15',
                ],
                [
                    'weekly_id'=>6,
                    'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'02',
                    'end_time'=>'00',
                ],
                [
                    'weekly_id'=>6,
                    'name'=>'Quân Doanh',
                    'start_time'=>'01',
                    'end_time'=>'02',
                ],
                [
        			'weekly_id'=>7,
        			'name'=>'Đoạt Bảo',
                    'start_time'=>'01',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>7,
        			'name'=>'Truy Nã Hải Tặc',
                    'start_time'=>'10',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>7,
        			'name'=>'Thiên Tầng Tháp',
                    'start_time'=>'01',
        			'end_time'=>'13',
        		],
        		[
        			'weekly_id'=>7,
        			'name'=>'Lâu Lan Tầm Bảo',
                    'start_time'=>'01',
        			'end_time'=>'02',
        		],
        		[
        			'weekly_id'=>7,
        			'name'=>'Tàng Bảo Đồ',
                    'start_time'=>'01',
        			'end_time'=>'12',
        		],
        		[
        			'weekly_id'=>7,
        			'name'=>'Quân Doanh',
                    'start_time'=>'03',
        			'end_time'=>'04',
        		]

        	];
        DailyEvent::insert($data);
    }
}
