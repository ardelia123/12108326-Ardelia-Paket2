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
        Schema::create('detailsales', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->double('sub_total');
            $table->foreignid('product_id');
            $table->foreignid('sale_id');
            $table->timestamps();

            $table->foreign('sale_id')->references('id')->on('sale')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailsales');
    }
};
