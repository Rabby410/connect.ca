<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientList extends Model
{
    protected $fillable = [
        'clientName', 'address', 'city', 'Prov', 'country', 'postalCode', 'phone', 'Email', 'dob', 'age',
        'firstDeal', 'ageAtP', 'occupation', 'driversLicense', 'hubspotID', 'relatedpreConDealsByBuyer1',
        'relatedpreConDealsByBuyer2', 'relatedresaleDeals', 'relatedresaleDealsByBuyersName', 'relatedleaseDeals',
        'relatedPreConTrackersByBuyer1', 'relatedPreConTrackersByBuyer2',
    ];
}
