<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSANPHAMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->char('id', 14);
            $table->string('tensanpham', 50);
            $table->integer('giaban');
            $table->string('the', 50)->nullable();
            $table->char('anhsanpham',20);
            $table->text('mota')->nullable()->nullable();
            $table->char('id_kichthuoc',14);
            $table->char('id_loaisanpham',14);
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_kichthuoc')->references('id')->on('kich_thuoc');
            $table->foreign('id_loaisanpham')->references('id')->on('loai_san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
