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
            $table->string("name");
            $table->string("product_code");
            $table->string("industry_id")->nullable();
            $table->string("category_id");
            $table->string("subcategory_id")->nullable();
            $table->string("feature_image");
            $table->string("images");
            $table->string("original_price");
            $table->string("price")->nullable();
            $table->string("description");
            $table->string("shop_id");
            $table->string("color")->nullable();
            $table->string("size")->nullable();
            $table->string("recommanded")->default(0);
            $table->string("best_selling")->default(0);
            $table->string("qty");
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
