<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTheLoai')->unsigned();
            $table->foreign('idTheLoai')->references('id')->on('theloai')->onUpdate('cascade');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('img')->nullable();
            $table->string('short_content')->nullable();
            $table->longText('content')->nullable();
            $table->double('diem_danh_gia',3,2)->nullable();
            $table->integer('hot')->default(0);
            $table->integer('new')->default(0);
            // $table->integer('deCu')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
