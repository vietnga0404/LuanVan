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
        Schema::create('thuvien', function (Blueprint $table) {
            $table->string('masach');
            $table->primary('masach');
            $table->string('tensach');
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
        Schema::dropIfExists('thuvien');
    }
};
