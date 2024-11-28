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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();  // Creates auto-incrementing `id` column
            $table->string('customer_code');  // customer_code column
            $table->string('first_name');
            $table->string('last_name');
            $table->string('whatsapp_no', 20);
            $table->string('mobile_no', 20);
            $table->string('nic', 13);
            $table->string('user_image');
            $table->string('email_address');
            $table->string('company_name');
            $table->string('province');
            $table->string('district');
            $table->string('user_password');
            $table->string('user_password_re');
            $table->string('verification_code', 50);
            $table->string('is_verify', 10);
            $table->dateTime('joined_date');
            $table->timestamps();  // Adds `created_at` and `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
