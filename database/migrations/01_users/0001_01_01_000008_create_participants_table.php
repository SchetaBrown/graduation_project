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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();

            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->integer('cours_number');

            $table
                ->foreignId('user_id')
                ->constrained();
            $table
                ->foreignId('education_school_id')
                ->constrained();
            $table
                ->foreignId('education_direction_id')
                ->constrained();
            $table
                ->foreignId('attached_manager_id')
                ->nullable()
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
