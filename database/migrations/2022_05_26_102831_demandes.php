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
        Schema::create('demandes', function (Blueprint $table) {
            //demande id
            $table->id();
            //student id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //demande info
            $table->text('docs');
            $table->enum('degree', ['l1', 'l2', 'l3', 'm1', 'm2', 'd']);

            //condition malade
            $table->string('condition')->nullable();

            //status
            $table->tinyInteger('status')->default(1);

            //created_at and updated_at
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
        Schema::dropIfExists('demandes');
    }
};
