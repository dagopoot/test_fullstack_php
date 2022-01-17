<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
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
            $table->unsignedBigInteger('user_id');

            $table->string('name', 200);
            $table->text('description');
            $table->string('public_key', 100);
            $table->enum('property_type', Config::get('constants.property_types'));
            $table->enum('operation', Config::get('constants.operations'));
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('neighborhood', 100);
            $table->string('street', 100);
            $table->string('property_number', 10);
            $table->string('latitude', 20);
            $table->string('longitude', 20);

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
        Schema::dropIfExists('properties');
    }
}
