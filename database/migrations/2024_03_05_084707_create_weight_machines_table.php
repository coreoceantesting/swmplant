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
        Schema::create('weight_machines', function (Blueprint $table) {
            $table->id();;
            $table->string('trip_id', 10);
            $table->string('ledger_id', 11);
            $table->string('item_id', 11);
            $table->string('ticket_no', 10);
            $table->string('weightype', 2);
            $table->string('vehicle_no', 50);
            $table->string('party_code', 10);
            $table->string('item_code', 10);
            $table->decimal('charges', 10, 2);
            $table->string('dc_no', 10)->nullable();
            $table->decimal('grosswt', 10, 2);
            $table->decimal('tarewt', 10, 2);
            $table->decimal('netwt', 10, 2);
            $table->datetime('gross_date');
            $table->datetime('taredate');
            $table->datetime('netdate');
            $table->string('paymentmode', 10);
            $table->string('party_name', 50);
            $table->string('product_name', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weight_machines');
    }
};
