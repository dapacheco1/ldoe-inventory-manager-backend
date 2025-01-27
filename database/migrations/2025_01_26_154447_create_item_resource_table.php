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
        Schema::create('item_resource', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('resource_id');
            $table->integer('resource_amount');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('resource_id')->references('id')->on('resource_l_d_o_e_s')->onDelete('cascade');
            $table->primary(['resource_id', 'item_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_resource');
    }
};
