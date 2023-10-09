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
        Schema::table('sales', function (Blueprint $table) {
            $table->unsignedBigInteger('drang_commission')->change();
            $table->unsignedBigInteger('weight')->change();
            $table->unsignedBigInteger('rate')->change();
            $table->unsignedBigInteger('total_amount')->change();
            $table->unsignedBigInteger('driver_prize')->change();
            $table->unsignedBigInteger('mineral')->change();
            $table->unsignedBigInteger('gov_tax')->change();
            $table->unsignedBigInteger('agent_amount')->change();
            $table->unsignedBigInteger('safi_amount')->change();
            $table->unsignedBigInteger('recieved_amount')->change();
            $table->unsignedBigInteger('discount')->change();
            $table->unsignedBigInteger('extra_amount')->change();
            $table->longText('Description')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->string('stone_type')->change();
            
        });
    }
};
