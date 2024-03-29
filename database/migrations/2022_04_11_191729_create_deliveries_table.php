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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->string('company_name');
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->text('address');
            $table->double('contact')->nullable();
            $table->double('milk_amount');
            $table->double('damage_amount')->nullable();
            $table->date('delivery_date')->nullable();
            $table->double('price');
            $table->string('days_passed')->default(0);
            $table->string('status')->default('Processing');
            $table->string('payment_status');
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
};
