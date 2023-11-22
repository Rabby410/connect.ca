<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm($step = 1)
    {
        return view('form', compact('step'));
    }

    public function processForm(Request $request, $step = 1)
    {
        // Validation (you can customize this based on your form fields)
        $request->validate([
            'field' . $step => 'required',
        ]);

        // Save the form data to the database (you can customize this based on your needs)
        // For now, let's just store the data in the session
        session()->put('field' . $step, $request->input('field' . $step));

        // If it's the last step, perform the final save
        if ($step == 5) {
            // Implement your final save logic here

            // For now, we'll just clear the session data
            session()->forget('field1', 'field2', 'field3', 'field4', 'field5');

            return redirect()->route('form')->with('success', 'Form submitted successfully!');
        }

        // Redirect to the next step
        return redirect()->route('form', ['step' => $step + 1]);
    }
}