<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    protected $fillable = [
        'developmentName',
        'constructionDate',
        'completionDate',
        'address',
        'developerName',
        'developerName2',
        'developerName3',
        'developerName4',
        'salesFirm',
        'uRLandMarketingAssets',
        'connectDriveDevelopmentAssetsURL',
        'brokerPortalURL',
        'brokerPortalLogin',
        'brokerPortalPassword',
        'relatedpreConDeals',
        'developmentInformation',
        'brokerPortalAndMarketingAssets',
        'relatedPreConTrackers',
    ];
}
