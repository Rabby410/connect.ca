<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'AgentFullName',
        'LastName',
        'FirstName',
        'Brokerage',
        'PartnerType',
        'MentorPrimary',
        'MentorSecondary',
        'CellNumber',
        'EmailAddress',
        'HomeAddress',
        'Birthday',
        'EffectiveDate',
        'AssociatePeriodEndDate',
        'Notes',
        'PartnerTypeSelected',
        '_ComputedName',
        'relatedPreConDeals',
        'relatedResaleDealsByListingAgent',
        'relatedResaleDealsByBuyerAgent',
        'relatedResaleDealsByListingReferralAgentsFullName',
        'relatedResaleDealsByBuyerReferralAgentsFullName',
        'relatedPreConDealsByFacilitatingAgent',
        'relatedLeaseDealsByLandlordAgent',
        'relatedLeaseDealsByTenantRepAgent',
        'relatedLeaseTrackers',
        'relatedLeaseTrackersByAgentEmail',
        'relatedPreConDealsByMentor',
        'relatedpreConDealsByISA',
        'relatedPreConDealsByISAManager',
    ];
}
