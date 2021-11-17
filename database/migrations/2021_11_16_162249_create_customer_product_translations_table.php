<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerProductTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_product_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_product_id');
            $table->string('name', 200)->nulllable();
            $table->string('unit', 20)->nulllable();
            $table->longText('description', 20)->nulllable();
            $table->string('lang', 100);
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
        Schema::dropIfExists('customer_product_translations');
    }
}
