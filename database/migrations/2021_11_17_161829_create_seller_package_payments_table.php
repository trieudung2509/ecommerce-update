<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerPackagePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_package_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('seller_package_id');
            $table->string('payment_method');
            $table->longText('payment_details');
            $table->integer('approval');
            $table->integer('offline_payment');
            $table->string('reciept',150);
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
        Schema::dropIfExists('seller_package_payments');
    }
}
