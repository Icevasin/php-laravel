<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=ProductModel::latest()->get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new ProductModel;

        $request -> validate([
            'ProductID' => 'required',
            'Size' => 'required',
            'PricePerItem' => 'required']);

            $products->ProductID = $request->ProductID;
            $products->TypeOfShirt = $request->TypeOfShirt;
            $products->Size = $request->Size;
            $products->PricePerItem = $request->PricePerItem;
            $products->save();

        return redirect()->route('products.index') 
        -> with('success','products created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = ProductModel::find($id);
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = ProductModel::find($id);
        return view('products.edit',compact('products'));
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
        $products = ProductModel::find($id);

        $request -> validate([
            'ProductID' => 'required',
            'Size' => 'required',
            'PricePerItem' => 'required'
        ]);

        $products->ProductID = $request->ProductID;
        $products->TypeOfShirt = $request->TypeOfShirt;
        $products->Size = $request->Size;
        $products->PricePerItem = $request->PricePerItem;
        $products->update();

        return redirect()->route('products.index') 
        -> with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = ProductModel::find($id);

        $products->delete();

        return redirect()->route('products.index') 
                ->with('success','Product deleted successfully.');
    }
}
