<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    // Fetch all patients
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // Fetch a specific patient by ID
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show', compact('patient'));
    }

    // Show form to create a new patient
    public function form()
    {
        return view('patients.create');
    }

    // Store a new patient
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'contact_number' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'address' => 'nullable|string',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.all')->with('success', 'Patient created successfully.');
    }

     public function showForm($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.form', compact('patient'));
    }


}
