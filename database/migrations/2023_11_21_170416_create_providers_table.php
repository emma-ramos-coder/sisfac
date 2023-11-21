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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('document_number',20);
            $table->foreignId('document_type_id')->constrained()->onDelete('cascade');
            $table->string('name',30);
            $table->string('surname',30);
            $table->string('tradename',30);
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
        Schema::dropIfExists('providers');
    }
};
