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
        Schema::create('customer_compelte_order_parts', function (Blueprint $table) {
            $table->id();  // Creates auto-incrementing `id` column
            $table->string('ordered_code');
            $table->string('customer_code');
            $table->string('customer_request_code');
            $table->string('vendor_estimate_code');
            $table->string('main_cat_url');
            $table->string('vendor_code');
            $table->string('item_name');
            $table->string('unit_measurement');
            $table->string('no_of_unit');
            $table->string('cus_image');
            $table->string('unit_price', 10);
            $table->text('cus_description');
            $table->string('total_price', 20);
            $table->string('vat', 20);
            $table->string('net_total', 255);
            $table->string('stock_available', 10);
            $table->text('vendor_comment');
            $table->string('status', 10);
            $table->string('notifications', 10);
            $table->dateTime('ordered_date');
            $table->timestamps();  // Adds `created_at` and `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_compelte_order_parts');
    }
};
