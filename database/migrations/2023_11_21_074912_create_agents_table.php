<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('AgentFullName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('Brokerage')->nullable();
            $table->string('PartnerType')->nullable();
            $table->string('MentorPrimary')->nullable();
            $table->string('MentorSecondary')->nullable();
            $table->string('CellNumber')->nullable();
            $table->string('EmailAddress')->nullable();
            $table->text('HomeAddress')->nullable();
            $table->date('Birthday')->nullable();
            $table->date('EffectiveDate')->nullable();
            $table->date('AssociatePeriodEndDate')->nullable();
            $table->text('Notes')->nullable();
            $table->string('PartnerTypeSelected')->nullable();
            $table->string('_ComputedName')->nullable();
            $table->string('relatedPreConDeals')->nullable();
            $table->string('relatedResaleDealsByListingAgent')->nullable();
            $table->string('relatedResaleDealsByBuyerAgent')->nullable();
            $table->string('relatedResaleDealsByListingReferralAgentsFullName')->nullable();
            $table->string('relatedResaleDealsByBuyerReferralAgentsFullName')->nullable();
            $table->string('relatedPreConDealsByFacilitatingAgent')->nullable();
            $table->string('relatedLeaseDealsByLandlordAgent')->nullable();
            $table->string('relatedLeaseDealsByTenantRepAgent')->nullable();
            $table->string('relatedLeaseTrackers')->nullable();
            $table->string('relatedLeaseTrackersByAgentEmail')->nullable();
            $table->string('relatedPreConDealsByMentor')->nullable();
            $table->string('relatedpreConDealsByISA')->nullable();
            $table->string('relatedPreConDealsByISAManager')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agents');
    }
}