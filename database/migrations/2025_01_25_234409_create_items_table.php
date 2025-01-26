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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name',100);
            $table->boolean('is_craftable');
            $table->boolean('as_result_is_complete');
            $table->boolean('require_workbench');
            $table->boolean('is_workbench');
            $table->integer('workbench_id');
            $table->time('craft_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
