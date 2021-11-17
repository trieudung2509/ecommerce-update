<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPackagePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_package_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('customer_package_id');
            $table->string('payment_method');
            $table->longText('payment_details');
            $table->integer('approval');
            $table->integer('offline_payment');
            $table->string('reciept', 150);
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
        Schema::dropIfExists('customer_package_payments');
    }
}
