<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheSellerModel;

class TheSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theseller=TheSellerModel::latest()->get();
        return view('theseller.index',compact('theseller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theseller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theseller = new TheSellerModel;

        $request -> validate([
            'SellerID' => 'required',
            'SellerFirstname' => 'required',
            'SellerLastname' => 'required']);

            $theseller->SellerID = $request->SellerID;
            $theseller->SellerFirstname = $request->SellerFirstname;
            $theseller->SellerLastname = $request->SellerLastname;
            $theseller->Email = $request->Email;
            $theseller->phone = $request->phone;
            $theseller->address = $request->address;
            $theseller->save();

        return redirect()->route('theseller.index') 
        -> with('success','theseller created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theseller = TheSellerModel::find($id);
        return view('theseller.show',compact('theseller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theseller = TheSellerModel::find($id);
        return view('theseller.edit',compact('theseller'));
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
        $theseller = TheSellerModel::find($id);

        $request -> validate([
            'SellerID' => 'required',
            'SellerFirstname' => 'required',
            'SellerLastname' => 'required'
        ]);

        $theseller->SellerID = $request->SellerID;
        $theseller->SellerFirstname = $request->SellerFirstname;
        $theseller->SellerLastname = $request->SellerLastname;
        $theseller->Phone = $request->Phone;
        $theseller->Address = $request->Address;
        $theseller->update();

        return redirect()->route('theseller.index') 
        -> with('success','TheSeller updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theseller = TheSellerModel::find($id);

        $theseller->delete();

        return redirect()->route('theseller.index') 
                ->with('success','TheSeller deleted successfully.');
    }
}
