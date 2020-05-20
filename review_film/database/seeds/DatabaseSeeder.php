<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TheLoaiTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(SubCommentTableSeeder::class);
    }
}
