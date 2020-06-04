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
        	['adminName' => 'Danh', 'adminEmail' => 'Danh@gmail.com', 'adminPassword' => '123456'],
        	['adminName' => 'Huy', 'adminEmail' => 'Huy@gmail.com', 'adminPassword' => '456123'],
        	['adminName' => 'Khang', 'adminEmail' => 'Khang@gmail.com', 'adminPassword' => '987654'],
        	['adminName' => 'Khanh', 'adminEmail' => 'Khanh@gmail.com', 'adminPassword' => '456789'],
        	['adminName' => 'Phat', 'adminEmail' => 'Phat@gmail.com', 'adminPassword' => '123789']
        ];

        foreach ($data as $v) {
        	DB::table('admin')->insert(
        		[
        			'adminName' => $v['adminName'],        			
        			'adminEmail' => $v['adminEmail'],
        			'adminPassword' => md5($v['adminPassword']),
        			'phone' => $v['adminPassword'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }      

        Schema::enableForeignKeyConstraints();
    }
}
