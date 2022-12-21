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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string("logo");
            $table->string("tab_logo");
            $table->string("site_name");
            $table->string("hot_line")->nullable();
            $table->string("site_email")->nullable();
            $table->string("site_facebook")->nullable();
            $table->string("site_youtube")->nullable();
            $table->string("site_ig")->nullable();
            $table->string("site_tiktop")->nullable();
            $table->string("opening_closeing")->nullable();
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
        Schema::dropIfExists('site_infos');
    }
};
