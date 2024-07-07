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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // For storing the image URL or path
            $table->string('name');
            $table->string('size');
            $table->unsignedBigInteger('category_id'); // Foreign key column
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 8, 2)->nullable();
            // Define the foreign key constraint
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
