<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->nullable();
            $table->string('type', 150)->nullable();
            $table->string('imgtag', 150)->nullable();
            $table->string('manufacturer', 150)->nullable();
            $table->string('originLoc', 150)->nullable();
            $table->string('suplier', 150)->nullable();
            $table->string('certification', 150)->nullable();
            $table->string('isocet', 150)->nullable();
            $table->string('htfi', 150)->nullable();
            $table->string('color', 10)->nullable();
            $table->string('qrcode', 250)->nullbale();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('items');
    }

}
