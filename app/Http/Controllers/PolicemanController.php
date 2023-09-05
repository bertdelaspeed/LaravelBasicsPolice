<?php

namespace App\Http\Controllers;

use App\Models\Policeman;
use App\Http\Requests\StorePolicemanRequest;
use App\Http\Requests\UpdatePolicemanRequest;

class PolicemanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           // Retrieve the list of policemen from the database
    $policemen = Policeman::all();
    // dd($policemen);
    
    // Pass the list of policemen to the view
    return view('policemen.index', compact('policemen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // echo "Create method executed";
        return view('policemen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePolicemanRequest $request)
    {
        $policeman = new Policeman([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'matricule' => $request->input('matricule'),
            'email' => $request->input('email'),
        ]);
    
        // Save the new policeman record to the database
        $policeman->save();
    
        // Redirect to a success page or return a response
        return redirect()->route('policemen.index')
            ->with('success', 'Policeman record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Policeman $policeman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Policeman $policeman)
    {
        return view('policemen.edit', compact('policeman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePolicemanRequest $request, Policeman $policeman)
    {
            // Update the attributes of the Policeman model with the new data
    $policeman->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'matricule' => $request->input('matricule'),
        'email' => $request->input('email'),
    ]);

    // Redirect to a success page or return a response
    return redirect()->route('policemen.index')
        ->with('success', 'Policeman record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Policeman $policeman)
    {
           // Delete the policeman record from the database
    $policeman->delete();

    // Redirect to a success page or return a response
    return redirect()->route('policemen.index')
        ->with('success', 'Policeman record deleted successfully.');
    }
}
