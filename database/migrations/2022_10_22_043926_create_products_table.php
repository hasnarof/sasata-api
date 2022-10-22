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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('seller_id');
            $table->enum('condition', ['Baru', 'Jarang dipakai', 'Sering dipakai, rusak minor', 'Sering dipakai, rusak mayor']);
            $table->enum('status', ['available', 'sold out']);
            $table->boolean('is_cod');
            $table->string('address')->nullable();
            $table->string('province_id')->nullable();
            $table->string('city_id')->nullable();
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
