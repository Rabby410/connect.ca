<?php

namespace App\Http\Controllers;

use App\Models\ClientList;
use Illuminate\Http\Request;

class ClientListController extends Controller
{
    public function index()
    {
        $clientLists = ClientList::paginate(20);
        return view('client_lists.index', compact('clientLists'));
    }

    public function create()
    {
        return view('client_lists.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'clientName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'Prov' => 'required',
            'country' => 'required',
            'postalCode' => 'required',
            'phone' => 'required',
            'Email' => 'required|email',
            'dob' => 'required|date',
            'age' => 'required|integer',
            'firstDeal' => 'required|date',
            'ageAtP' => 'required|integer',
            'occupation' => 'required',
            'driversLicense' => 'required',
            'hubspotID' => 'required',
            'relatedpreConDealsByBuyer1' => 'required',
            'relatedpreConDealsByBuyer2' => 'required',
            'relatedresaleDeals' => 'required',
            'relatedresaleDealsByBuyersName' => 'required',
            'relatedleaseDeals' => 'required',
            'relatedPreConTrackersByBuyer1' => 'required',
            'relatedPreConTrackersByBuyer2' => 'required',
        ]);

        ClientList::create($data);

        return redirect()->route('client-lists.index')->with('success', 'Client created successfully');
    }

    public function show(ClientList $clientList)
    {
        return view('client_lists.show', compact('clientList'));
    }

    public function edit(ClientList $clientList)
    {
        return view('client_lists.edit', compact('clientList'));
    }

    public function update(Request $request, ClientList $clientList)
    {
        $data = $request->validate([
            'clientName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'Prov' => 'required',
            'country' => 'required',
            'postalCode' => 'required',
            'phone' => 'required',
            'Email' => 'required|email',
            'dob' => 'required|date',
            'age' => 'required|integer',
            'firstDeal' => 'required|date',
            'ageAtP' => 'required|integer',
            'occupation' => 'required',
            'driversLicense' => 'required',
            'hubspotID' => 'required',
            'relatedpreConDealsByBuyer1' => 'required',
            'relatedpreConDealsByBuyer2' => 'required',
            'relatedresaleDeals' => 'required',
            'relatedresaleDealsByBuyersName' => 'required',
            'relatedleaseDeals' => 'required',
            'relatedPreConTrackersByBuyer1' => 'required',
            'relatedPreConTrackersByBuyer2' => 'required',
        ]);

        $clientList->update($data);

        return redirect()->route('client-lists.index')->with('success', 'Client updated successfully');
    }

    public function destroy(ClientList $clientList)
    {
        $clientList->delete();

        return redirect()->route('client-lists.index')->with('success', 'Client deleted successfully');
    }
}
