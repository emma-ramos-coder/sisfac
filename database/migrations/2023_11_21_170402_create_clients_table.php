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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('document_number',15);
            $table->foreignId('document_type_id')->constrained()->onDelete('cascade');
            $table->string('names',30);
            $table->string('surnames',30);
            $table->string('address',30);
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->string('phone',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
