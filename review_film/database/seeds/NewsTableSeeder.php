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
        		'img' => 'unknow.jpg',
        		'short_content' => 'truyện kể về thám tử tí hon Conan',
        		'content' => 'kể về những cuộc phá án đầy ngoạn ngục của thám tử nhí tài ba',
        		'hot' => '1',
        	 	'new' => '1',
        		'deCu' => '1'
        	],
        	[
        		'idTheLoai' => '2',
        		'title' => 'One piece', 
        		'img' => 'one-piece.jpg',
        		'short_content' => 'nhân vật chính: Luffy',
        		'content' => 'kể về cuộc hành trình vượt biển để tìm kiếm kho bá...',
        		'hot' => '1',
        	 	'new' => '0',
        		'deCu' => '1'
        	],
        	[
        		'idTheLoai' => '3',
        		'title' => 'Thất hình đại tội', 
        		'img' => 'that-hinh-dai-toi.jpg',
        		'short_content' => 'nhân vật chính : 7 tội đồ',
        		'content' => 'kể về cuộc hỗn loạn và thanh trừng giữa các tộc',
        		'hot' => '1',
        	 	'new' => '0',
        		'deCu' => '0'
        	],
        	[
        		'idTheLoai' => '4',
        		'title' => 'Sherlock holmes', 
        		'img' => 'sherlock-holmes.jpg',
        		'short_content' => 'nhân vật chính : Sherlock Holmes',
        		'content' => 'kể về thám tử bậc nhất thế giới phá án ngoạn ngục',
        		'hot' => '0',
        	 	'new' => '1',
        		'deCu' => '1'
        	],
        	[
        		'idTheLoai' => '5',
        		'title' => 'Overlord', 
        		'img' => 'overlord.jpg',
        		'short_content' => 'nhân vật chính : Momon và Guild của hắn',
        		'content' => 'kể về cuộc xâm chiếm và trở thành bá chủ game',
        		'hot' => '0',
        	 	'new' => '1',
        		'deCu' => '0'
        	],
        	[
        		'idTheLoai' => '6',
        		'title' => 'Harry Potter', 
        		'img' => 'harry-potter.jpg',
        		'short_content' => 'nhân vật chính : Harry Potter và 2 đứa bạn',
        		'content' => 'kể về cuộc hỗn loạn ở thế giới phép thuật, nơi mà cậu đang sinh sống và học tập',
        		'hot' => '1',
        	 	'new' => '0',
        		'deCu' => '1'
        	],
        ];

        foreach ($data as $v) {
        	DB::table('news')->insert(
        		[
        			'idTheLoai' => $v['idTheLoai'],
        			'title' => $v['title'],
        			'img' => $v['img'],
        			'short_content' => $v['short_content'],
        			'content' => $v['content'],
        			'hot' => $v['hot'],
        			'new' => $v['new'],
        			'deCu' => $v['deCu'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
