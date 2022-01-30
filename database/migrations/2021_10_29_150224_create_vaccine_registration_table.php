<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_registration', function (Blueprint $table) {
            $table->id();
            $table->string('nid');
            $table->string('name');
            $table->string('email');
            $table->string('dob');
            $table->string('phone');
            $table->foreignId('center_id')->constrained('centers');
            $table->timestamp('phone_verified_at')->nullable();
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
        Schema::dropIfExists('vaccine_registration');
    }
}
