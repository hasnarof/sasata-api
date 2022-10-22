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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('seller');
            $table->enum('condition', ['Baru', 'Jarang dipakai', 'Sering dipakai, rusak minor', 'Sering dipakai, rusak mayor']);
            $table->enum('status', ['available', 'sold out']);
            $table->boolean('is_cod');
            $table->string('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
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
        Schema::dropIfExists('products');
    }
};
