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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('school_name');
            $table->string('locatie');
            $table->foreignId('creator_id')->references('id')->on('users')->nullable()->default()->onDelete('cascade');
            $table->boolean('status')->default(false);

            $table->unsignedBigInteger('won')->default(0);
            $table->unsignedBigInteger('draw')->default(0);
            $table->unsignedBigInteger('lost')->default(0);
            $table->unsignedBigInteger('goals_for')->default(0);
            $table->unsignedBigInteger('goals_against')->default(0);
            $table->unsignedBigInteger('pts')->default(0);
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
        Schema::dropIfExists('teams');
    }
};
