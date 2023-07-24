<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_prices', function (Blueprint $table) {
            $table->id();
            $table->string("item_name");
            $table->string("price_global");
            $table->string("unit");
            $table->string("city");
            $table->string("country");
            $table->string("date");
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
        Schema::dropIfExists('global_prices');
    }
};
