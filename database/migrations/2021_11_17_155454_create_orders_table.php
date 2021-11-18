<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('combined_order_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('guest_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('assign_delivery_boy')->nullable();
            $table->longText('shipping_address')->nullable();
            $table->string('delivery_status')->default('pending')->nullable();
            $table->string('payment_type')->nullable();
            $table->integer('manual_payment')->default(0);
            $table->text('manual_payment_data')->nullable();
            $table->string('payment_status')->default('unpaid')->nullable();
            $table->longText('payment_details')->nullable();
            $table->double('grand_total', 20, 2)->nullable();
            $table->string('request', 190)->nullable();
            $table->string('receipt', 190)->nullable();
            $table->double('coupon_discount', 20, 2)->default(0.00);
            $table->mediumText('code')->nullable();
            $table->integer('date');
            $table->integer('viewed')->default(0);
            $table->integer('delivery_viewed')->default(1);
            $table->boolean('cancel_request')->default(0);
            $table->dateTime('cancel_request_at')->nullable();
            $table->integer('payment_status_viewed')->default(1)->nullable();
            $table->integer('commission_calculated')->default(0);
            $table->timestamp('delivery_history_date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('orders');
    }
}
