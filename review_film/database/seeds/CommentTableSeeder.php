<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
        DB::table('comment')->truncate();

        $data = [
        	['idUser' => '1', 'idBaiRv' => '1', 'NoiDung' => 'Like 1 Love 1!'],
            ['idUser' => '2', 'idBaiRv' => '2', 'NoiDung' => 'Like 2 Love 2!'],
            ['idUser' => '3', 'idBaiRv' => '3', 'NoiDung' => 'Like 3 Love 3!'],
            ['idUser' => '4', 'idBaiRv' => '4', 'NoiDung' => 'Like 4 Love 4!'],
            ['idUser' => '5', 'idBaiRv' => '5', 'NoiDung' => 'Like 5 Love 5!'],
            ['idUser' => '1', 'idBaiRv' => '4', 'NoiDung' => 'Like 1 Love 4!'],
            ['idUser' => '2', 'idBaiRv' => '3', 'NoiDung' => 'Like 2 Love 3!'],
            ['idUser' => '3', 'idBaiRv' => '2', 'NoiDung' => 'Like 3 Love 2!'],
            ['idUser' => '4', 'idBaiRv' => '6', 'NoiDung' => 'Like 4 Love 6!'],
            ['idUser' => '5', 'idBaiRv' => '2', 'NoiDung' => 'Like 5 Love 2!'],
            ['idUser' => '1', 'idBaiRv' => '6', 'NoiDung' => 'Like 1 Love 6!'],
        ];

        foreach ($data as $v) {
        	DB::table('comment')->insert(
        		[
        			'idUser' => $v['idUser'],
        			'idBaiRv' => $v['idBaiRv'],
        			'NoiDung' => $v['NoiDung'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
