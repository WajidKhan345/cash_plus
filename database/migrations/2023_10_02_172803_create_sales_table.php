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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('stone_type', 100);
            $table->string('drang_commission', 100);
            $table->string('weight', 100);
            $table->string('rate', 100);
            $table->string('total_amount', 100);
            $table->string('driver_prize', 100);
            $table->string('mineral', 100);
            $table->string('gov_tax', 100);
            $table->string('agent_amount', 100);
            $table->string('safi_amount', 100);
            $table->string('recieved_amount', 100);
            $table->string('discount', 100);
            $table->string('extra_amount', 100);
            $table->string('Description', 100);
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('factory_id')->constrained('factories');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
