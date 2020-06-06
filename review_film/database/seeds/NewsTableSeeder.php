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
        		'img' => '["conan.jpg","conan1.png","conan2.jpg"]',
        		'short_content' => 'truyện kể về thám tử tí hon Conan....',
        		'content' => '<p>Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc. Trong một lần đi chơi công viên "Miền Nhiệt đới" với cô bạn từ thuở nhỏ Ran Mori, cậu tình cờ chứng kiến vụ một án giết người, Kishida - một hành khách trong trò chơi Chuyến tàu tốc hành đã bị giết một cách dã man. Cậu đã giúp cảnh sát làm sáng tỏ vụ án. Trên đường về nhà, cậu vô tình phát hiện một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Khi chúng phát hiện ra cậu, Shinichi đã bị đánh ngất đi. Sau đó những người đàn ông áo đen đó đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo. Khi tỉnh lại, cậu bàng hoàng nhận thấy mình đã bị teo nhỏ lại thành hình dạng của một cậu học sinh tiểu học.</p>

<p>Theo lời khuyên của Tiến sĩ Hiroshi Agasa, Shinichi đã che giấu tung tích, để tránh việc hội Áo đen có thể phát hiện ra rằng cậu vẫn còn sống. Khi Ran hỏi tên cậu, Shinichi đã ghép "Conan" trong tên của Sir Arthur Conan Doyle và "Edogawa" trong tên của Edogawa Rampo, buột miệng nói ra tên mình là "Conan Edogawa". Tiến sĩ Agasa đã nói Conan là một người cháu của mình, nhưng hiện ông đang quá bận rộn không thể chăm sóc cho chú bé nên đã nhờ Ran trông nom Conan giúp mình. Ran nhận lời và từ đó Conan sống tại nhà của Ran tức văn phòng thám tử Mori, vừa che giấu thân phận vừa điều tra tung tích của Tổ chức Áo đen và tìm kiếm thuốc giải độc.</p>

<p>Cha của Ran, Kogoro Mori (Richard Moore) là một thám tử bất tài. Từ khi Conan giúp ông phá án, ông trở nên rất nổi tiếng với biệt danh "Mori ngủ gật". Vì bộ dạng bé nhỏ của Conan, cảnh sát chẳng mấy khi để tâm tới những phán đoán, suy luận của cậu bé. Conan, bằng cách bắn súng gây mê để cho ông Mori ngủ say, sau đó sử dụng thiết bị đổi giọng nói là chiếc nơ gắn trên cổ áo để giả giọng ông, đã giúp cảnh sát phá rất nhiều vụ án dưới danh nghĩa Mori. Cũng có lúc cậu gợi ý và dẫn dắt ông Mori tìm ra chìa khóa của vụ án hay phá án dưới danh nghĩa của Suzuki Sonoko, bạn thân của Ran.</p>

<p>Một số nhân vật quan trọng khác xuất hiện về sau là cha mẹ của Shinichi, Yusaku (Booker) và Yukiko Kudo (Vivian), Heiji Hattori, một thám tử đến từ Osaka, Siêu trộm Kid, nhà sáng chế ra thuốc APTX4869 - Sherry ( người của Tổ chức Áo đen, cũng bị biến thành một đứa trẻ sau khi uống chính loại thuốc độc mình đã sáng chế ra với hy vọng chạy trốn khỏi tổ chức), các thành viên của Tổ chức Áo đen: Gin, Vodka, Tequila, Calvados, Pisco, Vermouth, Kir, Chianti, Köln, và một "ông trùm" bí ẩn chỉ được nhắc đến rất mơ hồ.</p>

<p>Để duy trì vỏ bọc bên ngoài, Conan đi học ở trường Tiểu học Teitan và kết bạn với ba đứa trẻ ở trường, Genta Kojima, Mitsuhiko Tsuburaya, và Ayumi Yoshida, lập ra Đội thám tử nhí lớp 1B (Detective Boys/Shōnen Tantei-dan - trong bản gốc). Bộ tứ đã có nhiều cuộc phiêu lưu với nhau và ba đứa trẻ đã cho thấy khả năng làm trợ lý thám tử ở tuổi của chúng. Sau này, Ai Haibara - tức Sherry cũng trở thành thành viên của đội thám tử nhí này.</p>

<p>Trải qua nhiều vụ án, Conan khám phá ra rằng FBI và CIA cũng đang truy đuổi Tổ chức Áo đen. Cùng với các thành viên Áo đen đang dần dần lộ mặt, truyện xuất hiện thêm một số điệp viên của FBI và CIA như Shuichi Akai, Jodie Starling, James Black, Mizunashi Rena...</p>',
        		'hot' => '1',
        	 	'new' => '1',
                'diem_danh_gia' => 5.1
        	],
        	[
        		'idTheLoai' => '2',
        		'title' => 'One piece', 
        		'img' => 'one-piece.jpg',
                'img' => '["one-piece.jpg","one-piece1.png","one-piece2.jpg"]',
        		'short_content' => 'kể về con đường trở thành vua hải tặc của Monkey.D.Luffy',
        		'content' => '<p>Mở đầu phim là một đoạn hồi tưởng về phân cảnh của chiến trường Marineford. Trong thời điểm mà Râu Đen đang tập hợp những thủy thủ đoàn của mình thì hắn ta đã thấy hình ảnh Bullet cùng người bạn tù đã bị hắn sát hại dã man. Thấy được cảnh tượng ấy thì Râu Đen đã cảm thấy vô cùng sợ hãi và nhanh chóng rời đi.  (Đây cũng chính là phân cảnh duy nhất mà Râu Đen xuất hiện trong phim).Chuyển cảnh về thực tại, Festa đang dựng lên hội chợ hải tặc và bàn bạc với Bullet về việc chung tay hiện thực hóa kế hoạch của cả hai. Hắn ta nói về việc hội chợ này sẽ là một cơ hội để thay đổi thế giới này.</p>

<p>Chuyển cảnh sang băng Mũ Rơm tiếp cận đảo Delta để tham gia hội chợ. Luffy lúc bấy giờ đang rất phấn khích khi biết mình sẽ tham gia tìm kiếm kho báu của Roger.Một đoạn phim ngắn chiếu cảnh Mũ Rơm đến hội chợ và vui chơi tại các địa điểm trong đó.Sau đó, cuộc đua truy tìm kho báu bắt đầu.</p>

<p>Những tên tuổi tham gia gồm có băng Mũ Rơm, băng Barto, Cải Bắp, băng hải tặc Foxy và băng mới thành lập của Wapol.Law (trong tình trạng bị thương) đã xuất hiện phía sau hội chợ và nắm được tẩy của hội chợ này.Buggy xuất hiện trong khoảng 30 giây... chỉ để khoe khoang về bản thân hắn ta. Hắn dường như đến muộn cuộc đua vì bỏ lỡ thông tin của hội chợ.</p>
<p>Buggy thấy Law nên ra tay tấn công. Law phát hiện ra tàu Sunny nên trốn vào đó vì tin tưởng băng Mũ Rơm.Donald Moderate và Ann được giới thiệu là chủ khảo cuộc thi. Ann thể hiện sức mạnh của trái ác quỷ Bijo Bijo no Mi ( Trái này cho phép người ăn nó có thể tạo ra ảo ảnh) thông qua việc tạo ra bản mô phỏng con rồng ở arc Punk Hazard. Tiếc thay... đây là lần duy nhất mà sức mạnh của trái ác quỷ này được thể hiện trong movie.</p>
<p>Cuộc đua giành kho báu của Roger bắt đầu. Nhưng đột nhiên có một xoáy nước hình thành ở trung tâm của hòn đảo. Từ đó xuất hiện một cột nước cao chót vót. Trên đỉnh của nó là một hòn đảo được bao phủ bởi bong bóng (giống ở đảo Người Cá). Hóa ra đây là hòn đảo đã chìm sâu từ lâu, cuối cùng cũng trồi lên từ vực sâu chứa kho báu của Roger. Các băng nhóm tham gia phải tìm cách leo lên hòn đảo đó để lấy được kho báu và trở thành người chiến thắng.</p>',
        		'hot' => '1',
        	 	'new' => '0',
                'diem_danh_gia' => 7.2
        	],
        	[
        		'idTheLoai' => '2',
        		'title' => 'Thất hình đại tội', 
        		'img' => '["that-hinh-dai-toi.jpg","that-hinh-dai-toi1.jpg","that-hinh-dai-toi2.jpg"]',
        		'short_content' => 'kể về 7 tội đồ và cuộc tranh đấu giữa các bộ tộc...',
        		'content' => 'Chưa có content',
        		'hot' => '1',
        	 	'new' => '0',
                'diem_danh_gia' => 9.3
        	],
        	[
        		'idTheLoai' => '1',
        		'title' => 'Sherlock holmes', 
        		'img' => '["sherlock-holmes.jpg","sherlock-holmes1.jpg"]',
        		'short_content' => 'kể về thám tử bậc nhất thế giới Sherlock Holmes với sự thông minh, ông đã phá án....',
        		'content' => 'Chưa có content',
        		'hot' => '0',
        	 	'new' => '1',
                'diem_danh_gia' => 4.4
        	],
        	[
        		'idTheLoai' => '5',
        		'title' => 'Overlord', 
        		'img' => '["overlord.jpg","overlord1.jpg","overlord2.jpg"]',
        		'short_content' => 'Kể về cuộc xâm chiếm và trở thành bá chủ game của pháp sư vương Momon và Guild của hắn...',
        		'content' => 'Chưa có content',
        		'hot' => '0',
        	 	'new' => '1',
                'diem_danh_gia' => 8.5
        	],
        	[
        		'idTheLoai' => '6',
        		'title' => 'Harry Potter', 
        		'img' => '["harry-potter.jpg"]',
        		'short_content' => 'Kể về hành trình chinh phục thế giới phép thuật của Harry Potter và 2 người bạn thân...',
        		'content' => 'Chưa có content',
        		'hot' => '1',
        	 	'new' => '0',
                'diem_danh_gia' => 6.7
        	],
            [
                'idTheLoai' => '7',
                'title' => 'The Conjuring', 
                'img' => '["conjuring.jpg"]',
                'short_content' => 'Kể về cuộc chiến đấu của nhóm người chuyên diệt quỷ với quỷ dữ mang hình dạng là một ma sơ!',
                'content' => 'Chưa có content',
                'hot' => '1',
                'new' => '1',
                'diem_danh_gia' => 9.5
            ],
            [
                'idTheLoai' => '7',
                'title' => 'Đứa trẻ bóng tối', 
                'img' => '["dua-tre-bong-toi.jpg"]',
                'short_content' => 'Kể về đứa trẻ đến từ địa ngục có sức mạnh phi thường đến hành tinh để...',
                'content' => 'kể về 1 đứa trẻ ngoài hành tình có siêu năng lực, thay vì trở thành anh hùng thì hắn lại thực hiện hàng loạt tội ác kinh hoàng!',
                'hot' => '0',
                'new' => '1',
                'diem_danh_gia' => 8.8
            ],
            [
                'idTheLoai' => '7',
                'title' => 'Annabelle', 
                'img' => '["annabelle.jpg"]',
                'short_content' => 'Kể về cuộc chiến đấu của 1 nhóm người với quỷ ẩn mình trong con búp bê....',
                'content' => 'Chưa có content',
                'hot' => '1',
                'new' => '1',
                'diem_danh_gia' => 9.1
            ],
            [
                'idTheLoai' => '7',
                'title' => 'IT - Tên hề ma quái', 
                'img' => '["it.jpg"]',
                'short_content' => 'Kể về tên hề ma quái qua vài chục năm thì hắn lại xuất hiện và dụ dỗ,ăn thịt trẻ em....',
                'content' => 'kể về 1 nhóm trẻ cùng nhau chiến đấu xua đuổi con quỷ ăn thịt cứ mỗi bao nhiêu năm quên rồi thì nó lại quay trở lại 1 lần!',
                'hot' => '1',
                'new' => '0',
                'diem_danh_gia' => 9.8
            ],
            [
                'idTheLoai' => '8',
                'title' => 'Liên minh anh hùng', 
                'img' => '["avengers.jpg"]',
                'short_content' => 'Kể về các siêu anh hùng chiến đấu và chống lại thế lực đen tối, bảo vệ trái đất....',
                'content' => 'kể về 1 nhóm siêu anh hùng dùng năng lực để chống lại bọn xâm lược trái đất và những thế lực đen tối khác!',
                'hot' => '1',
                'new' => '0',
                'diem_danh_gia' => 9.8
            ],
            [
                'idTheLoai' => '8',
                'title' => 'Nhanh và nguy hiểm', 
                'img' => '["fast-furious.jpg"]',
                'short_content' => 'Kể về các băng đảng đánh thuê và những cuộc chiến đậm chất hành động đến nghẹt thở!',
                'content' => 'Chưa có content',
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
