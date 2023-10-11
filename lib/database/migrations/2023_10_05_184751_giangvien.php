<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giangvien', function (Blueprint $table) {
            $table->string('gv_ma');
            $table->primary('gv_ma');
            $table->string('gv_ten');
            $table->string('gv_gioitinh');
            $table->string('gv_sdt');
            $table->string('gv_khoa');
            $table->foreign('gv_khoa')->references('k_makhoa')->on('khoa')->onDelete('cascade');
            $table->integer('gv_chucvu');
            $table->foreign('gv_chucvu')->references('cv_id')->on('chucvu')->onDelete('cascade');
            $table->string('gv_slug');
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
        Schema::dropIfExists('giangvien');
    }
};
