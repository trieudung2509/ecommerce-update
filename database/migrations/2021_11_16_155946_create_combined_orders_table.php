<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombinedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combined_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('shipping_address')->nullable();
            $table->double('grand_total',20,2)->default(0.00);
            $table->string('request', 190)->nullable();
            $table->string('receipt', 190)->nullable();
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
        Schema::dropIfExists('combined_orders');
    }
}
