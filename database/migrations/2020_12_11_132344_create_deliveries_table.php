<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zCode', 9);
            $table->string('zFirst', 20); 
            $table->string('zLast', 20); 
            $table->string('zStat', 10); 
            $table->string('zAdd', 30); 
            $table->string('zStreet', 100); 
            $table->integer('zContact'); 
            $table->string('zSize', 20); 
            $table->string('zQuantity', 20); 
            $table->string('zPayment', 20); 
            $table->string('zItem', 20); 
            $table->integer('uStat');
            $table->string('zMonth', 20); 
            $table->string('zMonth1', 20); 
            $table->string('zYear', 20); 
            $table->timestamp('zDate'); 
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
        Schema::dropIfExists('deliveries');
    }
}
