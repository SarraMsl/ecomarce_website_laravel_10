<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduiteTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('description');
            $table->float('purchase_price', 10, 2);
            $table->float('interest_percentage', 5, 2);
            $table->float('selling_price', 10, 2);
            $table->integer('quantité');
            $table->string('categories');
            $table->integer('hauteur');
            $table->integer('largeur');
            $table->string('varnish');
            $table->string('colors');
            $table->string('usage_location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
