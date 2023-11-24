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
        Schema::create('chitiet', function (Blueprint $table) {
            $table->increments('ct_id');
            $table->string('ke_sach');
            $table->string('tac_gia');
            $table->string('nha_xuat_ban');
            $table->string('nam_xuat_ban');
            $table->text('trich_dan');
            $table->string('sach');
            $table->foreign('sach')->references('masach')->on('thuvien')->onDelete('cascade');
            $table->integer('loai');
            $table->foreign('loai')->references('maloai')->on('loaisach')->onDelete('cascade');
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
        Schema::dropIfExists('chitiet');
    }
};
