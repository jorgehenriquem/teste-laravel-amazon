<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('paper_permiss', function (Blueprint $table) {
            $table->integer('permiss_id')->unsigned();
            $table->integer('paper_id')->unsigned();
            

            $table->foreign('permiss_id')->references('id')->on('permisses')->onDelete('cascade');
            $table->foreign('paper_id')->references('id')->on('papers')->onDelete('cascade');

            $table->primary(['permiss_id', 'paper_id']);
        });

         Schema::create('paper_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('paper_id')->unsigned();
            

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('paper_id')->references('id')->on('papers')->onDelete('cascade');

            $table->primary(['user_id', 'paper_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
}
