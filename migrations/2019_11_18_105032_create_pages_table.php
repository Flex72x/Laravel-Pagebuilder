<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('pagebuilder.storage.database.prefix') . 'pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('layout', 255);
            $table->longText('data')->nullable();
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
        Schema::dropIfExists(config('pagebuilder.storage.database.prefix') . 'pages');
    }
}
