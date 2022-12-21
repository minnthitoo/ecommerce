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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('industry_type');
            $table->integer('region_id');
            $table->string('address');
            $table->integer('status')->default(1);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('photo');
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
        Schema::dropIfExists('shops');
    }
};
