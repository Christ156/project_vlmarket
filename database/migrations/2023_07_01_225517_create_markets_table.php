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
        Schema::create('markets', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('item-name');
            $table->text('item-desc')->nullable();
            $table->string('item-img');
            $table->string('item-price');
            $table->string('item-loc');
            $table->string('item-seller');
            $table->string('item-condition');
            $table->string('item-category');
            $table->string('item-weight');
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
        Schema::dropIfExists('markets');
    }
};
