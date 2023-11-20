<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * https://cdn.cloudflare.steamstatic.com/steam/apps/2325281/capsule_sm_120.jpg?t=1697536842
     */
    public function up(): void
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');            
            $table->string('url');
            $table->string('name');           
            $table->string('description')->nullable();
            $table->timestamps();
            $table
            ->foreign('product_id')
            ->references('id')
            ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
