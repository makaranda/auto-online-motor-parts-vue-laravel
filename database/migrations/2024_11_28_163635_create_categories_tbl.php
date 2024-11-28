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
        Schema::create('categories_tbl', function (Blueprint $table) {
            $table->id();  // Automatically creates an `id` column as the primary key
            $table->string('category_id'); // category_id column (varchar(255))
            $table->string('type_of_need', 10); // type_of_need column (varchar(10))
            $table->string('category_name'); // category_name column
            $table->string('category_link_name'); // category_link_name column
            $table->string('category_image'); // category_image column
            $table->timestamps(); // Creates `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_tbl');
    }
};
