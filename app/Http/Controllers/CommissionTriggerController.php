<?php

namespace App\Http\Controllers;

use App\Models\CommissionTrigger;
use Illuminate\Http\Request;

class CommissionTriggerController extends Controller
{
    public function index()
    {
        $commissionTriggers = CommissionTrigger::paginate(20);
        return view('commission_triggers.index', compact('commissionTriggers'));
    }

    public function create()
    {
        return view('commission_triggers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'triggerEvent' => 'required',
            'depositEvent' => 'required',
        ]);

        CommissionTrigger::create($request->all());
        return redirect()->route('commission-triggers.index');
    }

    public function show(CommissionTrigger $commissionTrigger)
    {
        return view('commission_triggers.show', compact('commissionTrigger'));
    }

    public function edit(CommissionTrigger $commissionTrigger)
    {
        return view('commission_triggers.edit', compact('commissionTrigger'));
    }

    public function update(Request $request, CommissionTrigger $commissionTrigger)
    {
        $request->validate([
            'triggerEvent' => 'required',
            'depositEvent' => 'required',
        ]);

        $commissionTrigger->update($request->all());
        return redirect()->route('commission-triggers.index');
    }

    public function destroy(CommissionTrigger $commissionTrigger)
    {
        $commissionTrigger->delete();
        return redirect()->route('commission-triggers.index');
    }
}
