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
       Schema::create('add_farmers', function (Blueprint $table) {
            $table->string('serial_no');
            $table->id();
            $table->string('name',60);
            $table->string('locality',60);
            $table->string('farmers_account',15);
            $table->string('farmers_phone',15);
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
        Schema::dropIfExists('add_farmers');
    }
};
