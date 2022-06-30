<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomersModel;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=CustomersModel::latest()->get();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new CustomersModel;

        $request -> validate([
            'customerID' => 'required',
            'customerFirstname' => 'required',
            'customerLastname' => 'required'
        ]);

        $customers->customerID = $request->customerID;
        $customers->customerFirstname = $request->customerFirstname;
        $customers->customerLastname = $request->customerLastname;
        $customers->phone = $request->phone;
        $customers->address = $request->address;
        $customers->save();

        return redirect()->route('customers.index') 
        -> with('success','Customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customers = CustomersModel::find($id);
        return view('customers.show',compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = CustomersModel::find($id);
        return view('customers.edit',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customers = CustomersModel::find($id);

        $request -> validate([
            'customerID' => 'required',
            'customerFirstname' => 'required',
            'customerLastname' => 'required'
        ]);

        $customers->customerID = $request->customerID;
        $customers->customerFirstname = $request->customerFirstname;
        $customers->customerLastname = $request->customerLastname;
        $customers->phone = $request->phone;
        $customers->address = $request->address;
        $customers->update();

        return redirect()->route('customers.index') 
        -> with('success','Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = CustomersModel::find($id);

        $customers->delete();

        return redirect()->route('customers.index') 
                ->with('success','Customer deleted successfully.');
    }
}
