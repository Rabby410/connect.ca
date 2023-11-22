<?php

namespace App\Http\Controllers;

use App\Models\Brokerage;
use Illuminate\Http\Request;

class BrokerageController extends Controller
{
    public function index()
    {
        $brokerages = Brokerage::paginate(20);
        return view('brokerages.index', compact('brokerages'));
    }

    public function create()
    {
        return view('brokerages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brokerageName' => 'required',
            'brokerageAddress' => 'required',
            'brokeragePhone' => 'required',
            'relatedAgents' => 'required',
            'relatedresaleDealsByListingReferralAgentsBrokerage' => 'required',
            'relatedresaleDealsByBuyerReferralAgentsBrokerage' => 'required',
            'relatedleaseDeals' => 'required',
        ]);

        Brokerage::create($data);

        return redirect()->route('brokerages.index')->with('success', 'Brokerage created successfully');
    }

    public function show(Brokerage $brokerage)
    {
        return view('brokerages.show', compact('brokerage'));
    }

    public function edit(Brokerage $brokerage)
    {
        return view('brokerages.edit', compact('brokerage'));
    }

    public function update(Request $request, Brokerage $brokerage)
    {
        $data = $request->validate([
            'brokerageName' => 'required',
            'brokerageAddress' => 'required',
            'brokeragePhone' => 'required',
            'relatedAgents' => 'required',
            'relatedresaleDealsByListingReferralAgentsBrokerage' => 'required',
            'relatedresaleDealsByBuyerReferralAgentsBrokerage' => 'required',
            'relatedleaseDeals' => 'required',
        ]);

        $brokerage->update($data);

        return redirect()->route('brokerages.index')->with('success', 'Brokerage updated successfully');
    }

    public function destroy(Brokerage $brokerage)
    {
        $brokerage->delete();

        return redirect()->route('brokerages.index')->with('success', 'Brokerage deleted successfully');
    }
}
