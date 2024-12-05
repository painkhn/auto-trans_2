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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('marks')->insert([
            ['name' => 'Toyota'],
            ['name' => 'Porsche'],
            ['name' => 'Mercedes'],
            ['name' => 'BMW'],
            ['name' => 'Audi'],
            ['name' => 'Honda'],
            ['name' => 'Rolls-Royce'],
            ['name' => 'Bentley'],
            ['name' => 'Dodge'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
