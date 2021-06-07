<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKHOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho', function (Blueprint $table) {
            $table->char('id', 14);
            $table->string('tenkho', 50);
            $table->char('sdt',10);
            $table->string('diachi',100);
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
        Schema::dropIfExists('kho');
    }
}
