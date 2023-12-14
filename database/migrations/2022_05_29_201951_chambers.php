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
        Schema::create('chambers', function (Blueprint $table) {

            $table->id();

            //students
            $table->unsignedBigInteger('user_1')->unsigned()->nullable();
            $table->foreign('user_1')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('user_2')->unsigned()->nullable();
            $table->foreign('user_2')->references('id')->on('users')->onDelete('set null');

            //gender
            $table->enum('gender', ['m', 'f']);

            //chamber info
            $table->string('chamber_num');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chambers');
    }
};
