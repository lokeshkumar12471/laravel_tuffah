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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('admission_number');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('how');
            $table->integer('initial_response_rating');
            $table->text('initial_response_text')->nullable();
            $table->integer('explanation_of_treatment_rating');
            $table->text('explanation_of_treatment_text')->nullable();
            $table->integer('cost_of_treatment_rating');
            $table->text('cost_of_treatment_text')->nullable();
            $table->integer('reception_rating');
            $table->text('reception_text')->nullable();
            $table->integer('dmo_rating');
            $table->text('dmo_text')->nullable();
            $table->integer('nurse_rating');
            $table->text('nurse_text')->nullable();
            $table->integer('house_keeping_rating');
            $table->text('house_keeping_text')->nullable();
            $table->integer('satisfaction_of_treatment_rating');
            $table->text('satisfaction_of_treatment_text')->nullable();
            $table->string('any_other_feedback')->nullable();
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
        Schema::dropIfExists('feedback');
    }
};
