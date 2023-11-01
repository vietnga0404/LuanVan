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
        Schema::create('lichday', function (Blueprint $table) {
            $table->increments('ld_malich');
            $table->string('ld_mon');
            $table->foreign('ld_mon')->references('m_mamon')->on('mon')->onDelete('cascade');
            $table->string('ld_lop');
            $table->foreign('ld_lop')->references('l_malop')->on('lop')->onDelete('cascade');
            $table->date('ld_tungay');
            $table->date('ld_denngay');
            $table->string('ld_diadiem');
            $table->string('ld_baigiang')->nullable();
            $table->foreign('ld_baigiang')->references('b_mabai')->on('baigiang')->onDelete('cascade');
            $table->date('ld_ngay')->nullable();
            $table->integer('ld_thu')->nullable();
            $table->foreign('ld_thu')->references('mathu')->on('thu')->onDelete('cascade');
            $table->string('ld_buoi')->nullable();
            $table->foreign('ld_buoi')->references('mabuoi')->on('buoi')->onDelete('cascade');
            $table->string('ld_gv')->nullable();
            $table->foreign('ld_gv')->references('gv_ma')->on('giangvien')->onDelete('cascade');
            $table->bit('ld_status')->nullable();

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
        Schema::dropIfExists('lichday');
    }
};
