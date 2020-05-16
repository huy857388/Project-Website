<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
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
        DB::table('admin')->truncate();

        $data = [
        	['username' => 'Danh', 'email' => 'Danh@gmail.com', 'password' => '123456'],
        	['username' => 'Huy', 'email' => 'Huy@gmail.com', 'password' => '456123'],
        	['username' => 'Khang', 'email' => 'Khang@gmail.com', 'password' => '987654'],
        	['username' => 'Khanh', 'email' => 'Khanh@gmail.com', 'password' => '456789'],
        	['username' => 'Phat', 'email' => 'Phat@gmail.com', 'password' => '123789']
        ];

        foreach ($data as $v) {
        	DB::table('admin')->insert(
        		[
        			'username' => $v['username'],
        			'name' => $v['username'],
        			'email' => $v['email'],
        			'password' => bcrypt($v['password']),
        			'phone' => $v['password'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
