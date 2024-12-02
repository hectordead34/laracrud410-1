<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 50)->nullable()->default('calle');
            $table->integer('internal_num')->unsigned()->nullable()->default(521);
            $table->integer('external_num')->unsigned()->nullable()->default(864);
            $table->string('neighborhood', 40)->nullable()->default('vecindario');
            $table->string('town', 40)->nullable()->default('ciudad');
            $table->string('state', 40)->nullable()->default('estado');
            $table->string('country', 40)->nullable()->default('país');
            $table->integer('postal_code')->unsigned()->nullable()->default(93419);
            $table->string('references', 60)->nullable()->default('referencias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
