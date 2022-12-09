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
            $table->string('slug')->nullable();
            $table->float('reg_price');
            $table->float('sale_price');
            $table->string('sku');
            $table->string('stock');
            $table->longText('description');
            $table->string('thumbnail');
            $table->string('image_gallery1');
            $table->string('image_gallery2');
            $table->string('tags')->nullable();
            $table->bigInteger('categories_id');
            $table->softDeletes();
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
