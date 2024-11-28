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
        Schema::create('admins_tbl', function (Blueprint $table) {
            $table->id();  // Automatically creates an `id` column as primary key
            $table->string('admin_name'); // admin_name column
            $table->string('admin_address'); // admin_address column
            $table->string('admin_phone', 20); // admin_phone column (varchar(20))
            $table->string('user_name'); // user_name column
            $table->string('password'); // password column
            $table->string('password_re'); // password_re column (for confirmation)
            $table->dateTime('date_time'); // date_time column
            $table->timestamps(); // Creates `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins_tbl');
    }
};
