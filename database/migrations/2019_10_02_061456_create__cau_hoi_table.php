<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauHoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hoi', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('noi_dung');
            $table->integer('linh_vuc_id');
            $table->string('phuong_an_a');
            $table->string('phuong_an_b');
            $table->string('phuong_an_c');
            $table->string('phuong_an_d');
            $table->string('dap_an',5);
            $table->boolean('xoa')->default(false);
            $table->timestamps();
        
            $table->foreign('linh_vuc_id')->references('id')->on('cau_hoi');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cau_hoi');
    }
}
