<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_orders', function (Blueprint $table) {
            $table->id();

            $table->decimal('score', 8, 2)->default(0);
            $table->integer('place')->nullable();

            $table
                ->foreignId('event_id')
                ->constrained()
                ->onDelete('cascade');
            $table
                ->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->unique(['event_id', 'user_id']);

            $table->index(['event_id', 'score']);
            $table->index(['user_id', 'event_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_orders');
    }
};
