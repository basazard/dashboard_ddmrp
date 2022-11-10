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
        Schema::create('lead_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lead_time_factor')->constrained('lead_time_factors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_bom')->constrained('b_o_m_s')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('lead_times');
    }
};
