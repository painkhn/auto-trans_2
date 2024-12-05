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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->integer('price');
            $table->integer('mileage');
            $table->year('year');
            $table->enum('engine', ['gasoline', 'diesel', 'electro']);
            $table->decimal('volume', 2, 1);
            $table->integer('power');
            $table->unsignedBigInteger('mark_id');
            $table->timestamps();

            $table->foreign('mark_id')->references('id')->on('marks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
