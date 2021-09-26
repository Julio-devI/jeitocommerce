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
            $table->integer('views')->nullable();
            $table->decimal('rating_star')->nullable();
            $table->decimal('price');
            $table->integer('shopid');
            $table->integer('sales')->nullable();
            $table->json('images');
            $table->integer('likes')->nullable();
            $table->json('tenures')->nullable();
            $table->string('condition');
            $table->decimal('cmt_count')->nullable();
            $table->decimal('package_height');
            $table->integer('days_to_ship');
            $table->string('name');
            $table->string('currency');
            $table->boolean('item_dangerous')->nullable();
            $table->string('item_sku');
            $table->json('variations')->nullable();
            $table->boolean('is_2tier_item');
            $table->string('size_chart')->nullable();
            $table->decimal('package_length');
            $table->json('video_info');
            $table->boolean('is_pre_order');
            $table->boolean('has_variation');
            $table->integer('reserved_stock')->nullable();
            $table->integer('stock');
            $table->timestamps();

            //CHAVE ESTRANGEIRA 
            $table->foreignId('discount_id');
            $table->foreign('discount_id')
               ->references('id')->on('discounts')
                ->onUpdate('cascade');

            //CHAVE ESTRANGEIRA
            $table->foreignId('logistic_id');
            $table->foreign('logistic_id')
                ->references('id')->on('logistics')
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
