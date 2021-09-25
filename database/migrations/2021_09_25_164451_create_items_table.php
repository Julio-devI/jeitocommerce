<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->decimal('original_price');
            $table->decimal('package_width');
            $table->text('description');
            $table->decimal('weight');
            $table->integer('views');
            $table->decimal('rating_stars');
            $table->decimal('price');
            $table->integer('shopid');
            $table->integer('sales');
            $table->integer('discount_id');
            $table->json('images');
            $table->integer('likes');
            $table->integer('item_id')->unique();
            $table->json('tenures')->nullable();
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
        Schema::dropIfExists('items');
    }
}
