<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->double('rating',3,2)->default(0.00);
            $table->integer('number_of_reviews')->default(0);
            $table->integer('number_of_sale')->default(0);
            $table->integer('seller_package_id')->nullable();
            $table->integer('remaining_uploads')->default(0);
            $table->integer('remaining_digital_uploads')->default(0);
            $table->date('invalid_at')->nullable();
            $table->integer('verification_status')->default(0);
            $table->longText('verification_info')->nullable();
            $table->integer('cash_on_delivery_status')->default(0);
            $table->double('admin_to_pay',20,2)->default(0.00);
            $table->string('bank_name')->nullable();
            $table->string('bank_acc_name',200)->nullable();
            $table->string('bank_acc_no',50)->nullable();
            $table->integer('bank_routing_no')->nullable();
            $table->integer('bank_payments_status')->default(0);
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
        Schema::dropIfExists('sellers');
    }
}
