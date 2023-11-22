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
        Schema::create('brokerages', function (Blueprint $table) {
            $table->id();
            $table->string('AgentFullName')->nullable();
            $table->string('brokerageName')->nullable();
            $table->string('brokerageAddress')->nullable();
            $table->string('brokeragePhone')->nullable();
            $table->string('relatedAgents')->nullable();
            $table->string('relatedresaleDealsByListingReferralAgentsBrokerage')->nullable();
            $table->string('relatedresaleDealsByBuyerReferralAgentsBrokerage')->nullable();
            $table->string('relatedleaseDeals')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brokerages');
    }
};
