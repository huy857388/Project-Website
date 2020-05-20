<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Schema::disableForeignKeyConstraints();
        DB::table('news')->truncate();

        $data = [
        	[
        		'idTheLoai' => '1',
        		'title' => 'Conan - Thám tử lừng danh', 
        		'img' => 'conan.jpg',
        		'short_content' => 'truyện kể về thám tử tí hon Conan',
        		'content' => 'kể về những cuộc phá án đầy ngoạn ngục của thám tử nhí tài ba',
        		'hot' => '1',
        	 	'new' => '1',
                'diem_danh_gia' => 5.1
        	],
        	[
        		'idTheLoai' => '2',
        		'title' => 'One piece', 
        		'img' => 'one-piece.jpg',
        		'short_content' => 'nhân vật chính: Luffy',
        		'content' => 'kể về cuộc hành trình vượt biển để tìm kiếm kho bá...',
        		'hot' => '1',
        	 	'new' => '0',
                'diem_danh_gia' => 7.2
        	],
        	[
        		'idTheLoai' => '3',
        		'title' => 'Thất hình đại tội', 
        		'img' => 'that-hinh-dai-toi.jpg',
        		'short_content' => 'nhân vật chính : 7 tội đồ',
        		'content' => 'kể về cuộc hỗn loạn và thanh trừng giữa các tộc',
        		'hot' => '1',
        	 	'new' => '0',
                'diem_danh_gia' => 9.3
        	],
        	[
        		'idTheLoai' => '4',
        		'title' => 'Sherlock holmes', 
        		'img' => 'sherlock-holmes.jpg',
        		'short_content' => 'nhân vật chính : Sherlock Holmes',
        		'content' => 'kể về thám tử bậc nhất thế giới phá án ngoạn ngục',
        		'hot' => '0',
        	 	'new' => '1',
                'diem_danh_gia' => 4.4
        	],
        	[
        		'idTheLoai' => '5',
        		'title' => 'Overlord', 
        		'img' => 'overlord.jpg',
        		'short_content' => 'nhân vật chính : Momon và Guild của hắn',
        		'content' => 'kể về cuộc xâm chiếm và trở thành bá chủ game',
        		'hot' => '0',
        	 	'new' => '1',
                'diem_danh_gia' => 8.5
        	],
        	[
        		'idTheLoai' => '6',
        		'title' => 'Harry Potter', 
        		'img' => 'harry-potter.jpg',
        		'short_content' => 'nhân vật chính : Harry Potter và 2 đứa bạn',
        		'content' => 'kể về cuộc hỗn loạn ở thế giới phép thuật, nơi mà cậu đang sinh sống và học tập',
        		'hot' => '1',
        	 	'new' => '0',
                'diem_danh_gia' => 6.7
        	],
            [
                'idTheLoai' => '7',
                'title' => 'The Conjuring', 
                'img' => 'conjuring.jpg',
                'short_content' => 'Quỷ dữ',
                'content' => 'kể về cuộc chiến đấu với quỷ dữ!',
                'hot' => '1',
                'new' => '1',
                'diem_danh_gia' => 9.5
            ],
            [
                'idTheLoai' => '7',
                'title' => 'Đứa trẻ bóng tối', 
                'img' => 'dua-tre-bong-toi.jpg',
                'short_content' => 'đứa trẻ đến từ địa ngục',
                'content' => 'kể về 1 đứa trẻ ngoài hành tình có siêu năng lực, thay vì trở thành anh hùng thì hắn lại thực hiện hàng loạt tội ác kinh hoàng!',
                'hot' => '0',
                'new' => '1',
                'diem_danh_gia' => 8.8
            ],
            [
                'idTheLoai' => '7',
                'title' => 'Annabelle', 
                'img' => 'annabelle.jpg',
                'short_content' => 'Búp bê quỷ dữ',
                'content' => 'kể về cuộc chiến đấu với búp bê quỷ dữ thích giết chóc!',
                'hot' => '1',
                'new' => '1',
                'diem_danh_gia' => 9.1
            ],
            [
                'idTheLoai' => '7',
                'title' => 'IT - Tên hề ma quái', 
                'img' => 'it.jpg',
                'short_content' => 'tên hề ma quái dụ dỗ và ăn thịt trẻ em',
                'content' => 'kể về 1 nhóm trẻ cùng nhau chiến đấu xua đuổi con quỷ ăn thịt cứ mỗi bao nhiêu năm quên rồi thì nó lại quay trở lại 1 lần!',
                'hot' => '1',
                'new' => '0',
                'diem_danh_gia' => 9.8
            ],
            [
                'idTheLoai' => '8',
                'title' => 'Liên minh anh hùng', 
                'img' => 'avengers.jpg',
                'short_content' => 'các siêu anh hùng chiến đấu bảo vệ trái đất!',
                'content' => 'kể về 1 nhóm siêu anh hùng dùng năng lực để chống lại bọn xâm lược trái đất và những thế lực đen tối khác!',
                'hot' => '1',
                'new' => '0',
                'diem_danh_gia' => 9.8
            ],
            [
                'idTheLoai' => '8',
                'title' => 'Nhanh và nguy hiểm', 
                'img' => 'fast-furious.jpg',
                'short_content' => 'các băng đảng đánh thuê chả bít nữa!',
                'content' => 'kể về tình anh em giữa những người đồng đội chí cốt! vãi lều!',
                'hot' => '1',
                'new' => '1',
                'diem_danh_gia' => 8.3
            ],           
        ];

        foreach ($data as $v) {
        	DB::table('news')->insert(
        		[
        			'idTheLoai' => $v['idTheLoai'],
        			'title' => $v['title'],
                    'slug' => str_slug($v['title']),
        			'img' => $v['img'],
        			'short_content' => $v['short_content'],
        			'content' => $v['content'],
        			'hot' => $v['hot'],
        			'new' => $v['new'],
                    'diem_danh_gia' => $v['diem_danh_gia'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
