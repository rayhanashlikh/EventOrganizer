<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users') //referensi dari field id dari tabel users
            ->onDelete('cascade')
            ->onChange('cascade'); 
            $table->bigInteger('event_id')->unsigned();
            $table->foreign('event_id')
            ->references('id')->on('events') //referensi dari field id dari tabel users
            ->onDelete('cascade')
            ->onChange('cascade'); 
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
        Schema::dropIfExists('participant');
    }
}
