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
        Schema::create('developments', function (Blueprint $table) {
            $table->id();
            $table->string('developmentName')->nullable();
            $table->date('constructionDate')->nullable();
            $table->date('completionDate')->nullable();
            $table->string('address')->nullable();
            $table->string('developerName');
            $table->string('developerName2')->nullable();
            $table->string('developerName3')->nullable();
            $table->string('developerName4')->nullable();
            $table->string('salesFirm')->nullable();
            $table->string('uRLandMarketingAssets')->nullable();
            $table->string('connectDriveDevelopmentAssetsURL')->nullable();
            $table->string('brokerPortalURL')->nullable();
            $table->string('brokerPortalLogin')->nullable();
            $table->string('brokerPortalPassword')->nullable();
            $table->text('relatedpreConDeals')->nullable();
            $table->text('developmentInformation')->nullable();
            $table->text('brokerPortalAndMarketingAssets')->nullable();
            $table->text('relatedPreConTrackers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developments');
    }
};
