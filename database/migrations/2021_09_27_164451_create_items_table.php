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
            $table->decimal('rating_star');
            $table->decimal('price');
            $table->integer('shopid');
            $table->integer('sales');
            $table->json('images');
            $table->integer('likes');
            $table->json('tenures')->nullable();
            $table->string('condition');
            $table->decimal('cmt_count');
            $table->decimal('package_height');
            $table->integer('days_to_ship');
            $table->string('name');
            $table->string('currency');
            $table->boolean('item_dangerous');
            $table->string('item_sku');
            $table->json('variations');
            $table->boolean('is_2tier_item');
            $table->string('size_chart');
            $table->decimal('package_length');
            $table->json('video_info');
            $table->boolean('is_pre_order');
            $table->boolean('has_variation');
            $table->integer('reserved_stock');
            $table->integer('stock');
            $table->timestamps();

            //CHAVE ESTRANGEIRA
            $table->foreignId('item_id');
            $table->foreign('item_id')
               ->references('id')->on('items')
                ->onUpdate('cascade');

            //CHAVE ESTRANGEIRA 
            $table->foreignId('discount_id');
            $table->foreign('discount_id')
               ->references('id')->on('discounts')
                ->onUpdate('cascade');

            //CHAVE ESTRANGEIRA
            $table->foreignId('logistic_id');
            $table->foreign('logistic_id')
                ->references('id')->on('logistic')
                ->onUpdate('cascade');

            //CHAVE ESTRANGEIRA
            $table->foreignId('attribute_id');
            $table->foreign('attribute_id')
                ->references('id')->on('attributes')
                ->onUpdate('cascade');
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
