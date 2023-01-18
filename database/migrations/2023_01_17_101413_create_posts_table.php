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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teamA_id')->references('id')->on('teams')->onDelete('cascade');       
            $table->foreignId('teamB_id')->references('id')->on('teams')->onDelete('cascade');
            $table->string('teamA')->nullable();
            $table->string('teamB')->nullable();
            $table->integer('scoreA')->nullable();
            $table->integer('scoreB')->nullable();
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
        Schema::dropIfExists('posts');
    }
};