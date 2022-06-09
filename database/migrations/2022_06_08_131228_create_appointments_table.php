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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('service_id');
            $table->integer('worker_id');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->float('price')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email');
            $table->string('payment',10)->default('On Hold');
            $table->string('ip',20)->nullable();
            $table->string('note',100);
            $table->string('status',10)->default('New');
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
        Schema::dropIfExists('appointments');
    }
};
