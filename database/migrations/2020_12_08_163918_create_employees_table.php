<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vCode', 9);
            $table->string('uFirst', 20); 
            $table->string('uLast', 20); 
            $table->string('uStat', 20); 
            $table->string('uAdd', 20);
            $table->string('uEmail', 20);
            $table->integer('uContact');
            $table->string('uPass', 20);
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
        Schema::dropIfExists('employees');
    }
}
