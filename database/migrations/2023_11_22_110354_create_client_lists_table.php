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
        Schema::create('client_lists', function (Blueprint $table) {
            $table->id();
            $table->string('clientName')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('Prov')->nullable();
            $table->string('country')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->date('firstDeal')->nullable();
            $table->integer('ageAtP')->nullable();
            $table->string('occupation')->nullable();
            $table->string('driversLicense')->nullable();
            $table->string('hubspotID')->nullable();
            $table->string('relatedpreConDealsByBuyer1')->nullable();
            $table->string('relatedpreConDealsByBuyer2')->nullable();
            $table->string('relatedresaleDeals')->nullable();
            $table->string('relatedresaleDealsByBuyersName')->nullable();
            $table->string('relatedleaseDeals')->nullable();
            $table->string('relatedPreConTrackersByBuyer1')->nullable();
            $table->string('relatedPreConTrackersByBuyer2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_lists');
    }
};
