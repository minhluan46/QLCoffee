<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCUAHANGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cua_hang', function (Blueprint $table) {
            $table->char('id', 14);
            $table->string('tenchinhanh', 50);
            $table->string('diachi',100);
            $table->string('sdt');
            $table->string('giohoatdong',100);
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
        Schema::dropIfExists('cua_hang');
    }
}
