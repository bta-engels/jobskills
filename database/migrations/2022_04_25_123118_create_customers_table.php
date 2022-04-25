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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->date('birthdate')->nullable();
            $table->string('street', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('postcode', 50)->nullable();
            $table->string('img', 100)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('remember_token', 50)->nullable();
            $table->text('about_me')->nullable();
            $table->boolean('confirmed')->default(0);
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
        Schema::dropIfExists('customers');
    }
};
