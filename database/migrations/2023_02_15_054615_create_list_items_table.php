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
        Schema::create('list_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('ranking', 3, 2);
            $table->longText('summary')->default('');
            $table->integer('categoryid');
            $table->longText('url');
            $table->integer('visit');
            $table->longText('tags');
            $table->integer('leaderboardid');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_items');
    }
};
