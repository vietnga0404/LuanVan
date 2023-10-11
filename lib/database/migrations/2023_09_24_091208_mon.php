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
        Schema::create('mon', function (Blueprint $table) {
            $table->string('m_mamon');
            $table->primary('m_mamon');
            $table->string('m_tenmon');
            $table->string('m_khoa');
            $table->foreign('m_khoa')->references('k_makhoa')->on('khoa')->onDelete('cascade');
            $table->string('m_slug');
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
        Schema::dropIfExists('mon');
    }
};
