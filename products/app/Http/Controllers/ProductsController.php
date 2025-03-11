<?php

namespace App\Http\Controllers;

use App\Models\phones;
use App\Models\products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use User;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        products::create(
            $request->all()
        );
        return response('Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = products::where('id',$id)->first();
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $products =products::findOrFail($id);
        $products->update(
            $request->all()
        );
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        products::destroy($id);
        return redirect()->route('products.index');
    }

   
}
