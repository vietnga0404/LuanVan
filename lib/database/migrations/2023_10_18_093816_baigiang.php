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
        Schema::create('baigiang', function (Blueprint $table) {
            $table->string('b_mabai');
            $table->primary('b_mabai');
            $table->string('b_tenbai');
            $table->integer('b_sotiet');
            $table->string('b_mon');
            $table->foreign('b_mon')->references('m_mamon')->on('mon')->onDelete('cascade');
            $table->string('b_slug');
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
        Schema::dropIfExists('baigiang');
    }
};
