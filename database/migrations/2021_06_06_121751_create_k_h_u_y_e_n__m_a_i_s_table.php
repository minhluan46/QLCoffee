<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKHUYENMAISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyen_mai', function (Blueprint $table) {
            $table->char('id', 14);
            $table->string('tenchuongtrinhkhuyenmai', 50);
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
            $table->text('mota');
            $table->string('anhquangcao', 50);
            $table->text('tomtatnoidung')->nullable();
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyen_mai');
    }
}
