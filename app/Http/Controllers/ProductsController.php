<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::paginate(10);
        return view('products.index', ['products' => $product]);
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
        $request->validate([
            'productname'   => 'required|string|max:255',
            'category'      => 'required|string|max:255',
            'description'   => 'required|string|max:255',
            'remarks'       => 'nullable',
            'price'         => 'required|numeric|digits_between:1,12',
        ]);

        // Products::create($request->all());
        Products::create([
            'productname'   => $request->productname,
            'category'      => $request->category,
            'description'   => $request->description,
            'remarks'       => $request->remarks,
            'price'         => $request->price
        ]);

        return redirect('/products/create')->with('status', 'Product Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        return view('products.edit', compact('products'));
        dd($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
