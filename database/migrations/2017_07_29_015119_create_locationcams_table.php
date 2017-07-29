<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationcamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locationcams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logi', '100')->nullable();
            $table->string('lang', '100')->nullable();
            $table->string('locname', '100')->nullable();
            $table->string('type', '100')->nullable();
            $table->string('distanfrom', '100')->nullable();
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
        Schema::dropIfExists('locationcams');
    }
}
