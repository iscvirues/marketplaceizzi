<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_configurations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('file_id');
            $table->foreignId('brand_id');
            $table->foreignId('region_id');
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unique(['file_id', 'region_id', 'brand_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_configurations');
    }
}
