<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->truncate();

        $data = [
        	['name' => 'Danh', 'email' => 'Danh@gmail.com', 'password' => '123456'],
        	['name' => 'Huy', 'email' => 'Huy@gmail.com', 'password' => '456123'],
        	['name' => 'Khang', 'email' => 'Khang@gmail.com', 'password' => '987654'],
        	['name' => 'Khánh', 'email' => 'Khanh@gmail.com', 'password' => '456789'],
        	['name' => 'Phát', 'email' => 'Phat@gmail.com', 'password' => '123789']
        ];

        foreach ($data as $v) {
        	DB::table('users')->insert(
        		[
        			'name' => $v['name'],
        			'email' => $v['email'],
        			'password' => bcrypt($v['password']),
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
