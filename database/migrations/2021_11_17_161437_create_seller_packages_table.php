<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('amount',11,2)->default(0.00);
            $table->integer('product_upload')->default(0);
            $table->integer('digital_product_upload')->default(0);
            $table->string('logo')->nullable();
            $table->integer('duration')->default(0);
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
        Schema::dropIfExists('seller_packages');
    }
}
