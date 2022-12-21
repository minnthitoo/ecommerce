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
        Schema::create('become_merchants', function (Blueprint $table) {
            $table->id();
            $table->string("shop_name");
            $table->string("contact_person");
            $table->string("email");
            $table->string("phone");
            $table->string("address");
            $table->string("industry_type");
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
        Schema::dropIfExists('become_merchants');
    }
};
