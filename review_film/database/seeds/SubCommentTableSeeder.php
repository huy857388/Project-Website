<?php

use Illuminate\Database\Seeder;

class SubCommentTableSeeder extends Seeder
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
        DB::table('subcomment')->truncate();

        $data = [
        	['idComment' => '1', 'idUser' => 1],
        	['idComment' => '2', 'idUser' => 2],
            ['idComment' => '3', 'idUser' => 3],
            ['idComment' => '4', 'idUser' => 4],
            ['idComment' => '5', 'idUser' => 5],
            ['idComment' => '6', 'idUser' => 1],
            ['idComment' => '7', 'idUser' => 2],
            ['idComment' => '8', 'idUser' => 3],
            ['idComment' => '9', 'idUser' => 4],
            ['idComment' => '10', 'idUser' => 5],
            ['idComment' => '1', 'idUser' => 1],
            ['idComment' => '2', 'idUser' => 2],
            ['idComment' => '3', 'idUser' => 3],
            ['idComment' => '4', 'idUser' => 4],
            ['idComment' => '5', 'idUser' => 5],
            ['idComment' => '7', 'idUser' => 1],
            ['idComment' => '8', 'idUser' => 2],
            ['idComment' => '9', 'idUser' => 3],
            ['idComment' => '10', 'idUser' => 4],
            ['idComment' => '1', 'idUser' => 5],
        ];

        foreach ($data as $v) {
        	DB::table('subcomment')->insert(
        		[
        			'idComment' => $v['idComment'],
                    'idUser' => $v['idUser'],
        			'NoiDung' => 'Comment con của bài viết '.$v['idComment'].', người dùng '.$v['idUser'].'!',
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
