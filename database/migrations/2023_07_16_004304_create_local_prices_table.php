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
        Schema::create('local_prices', function (Blueprint $table) {
            $table->id();
            $table->string("item_name");
            $table->string("price_local");
            $table->string("unit");
            $table->string("city");
            $table->string("state_division");
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
        Schema::dropIfExists('local_prices');
    }
};
