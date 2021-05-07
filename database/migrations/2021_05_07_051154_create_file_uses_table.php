<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_uses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->string('name');
            $table->text('copytitleused');
            $table->text('copytextbodyused');
            $table->string('fileusetype');//Descargado, compartido, etc
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_uses');
    }
}
