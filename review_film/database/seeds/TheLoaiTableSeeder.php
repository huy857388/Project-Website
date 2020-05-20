<?php

use Illuminate\Database\Seeder;

class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('theloai')->truncate();

        $data = [
        	['Ten' => 'Trinh thám'], 
        	['Ten' => 'Phiêu lưu'],
        	['Ten' => 'Hài hước'],
        	['Ten' => 'Tình cảm'],
        	['Ten' => 'Phép thuật'],
        	['Ten' => 'Viễn tưởng'],
            ['Ten' => 'Kinh dị'],
            ['Ten' => 'Hành động'],
        ];

        foreach ($data as $v) {
        	DB::table('theloai')->insert(
        		[
        			'Ten' => $v['Ten'],
        			'TenKhongDau' => str_slug($v['Ten']),
                    // 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    // 'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
