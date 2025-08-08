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
       Schema::create('shipping_info', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('order_id');
        $table->string('full_name');
        $table->string('phone');
        $table->string('email')->nullable();
        $table->string('address');
        $table->string('city');
        $table->string('postal_code');
        $table->string('country')->default('Bangladesh');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_info');
    }
};
