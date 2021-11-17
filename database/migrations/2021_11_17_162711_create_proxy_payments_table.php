<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProxyPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proxy_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('order_id');
            $table->integer('order_detail_id');
            $table->integer('seller_id');
            $table->integer('seller_approval')->default(0);
            $table->integer('admin_approval')->default(0);
            $table->double('refund_amount',8,2)->default(0.00);
            $table->longText('reason')->nullable();
            $table->integer('admin_seen');
            $table->integer('refund_status')->default(0);
            $table->longText('reject_reason')->nullable();
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
        Schema::dropIfExists('proxy_payments');
    }
}
