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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->String('adresse')->nullable();
            $table->String('type')->nullable();
            $table->String('description')->nullable();
            $table->String('oname')->nullable();
            $table->String('ophone')->nullable();
            $table->String('oaddress')->nullable();
            $table->String('oemail')->nullable();
            $table->String('image')->nullable();


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
        Schema::dropIfExists('properties');
    }
};
