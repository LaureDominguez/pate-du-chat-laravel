<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

<<<<<<< HEAD
=======
use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\isTrue;

>>>>>>> nav
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create()
    {
        return view('shop.product-form');
=======
    public function create(Product $product)
    {
        return view('shop.create', [
            'product' => $product
        ]);
>>>>>>> nav
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======

        $product = new Product;
        $product->title = $request->title;
        $product->content = $request->content;
        $product->price = $request->price;

        // if ($request->image) {
        //     dd($request);
        //     $request->validate([
        //         'image' => 'mimes:png,jpg,jpeg'
        //     ]);
        //     $request->image->store('product', 'app', 'public');
        //     $product->image = $request->file->hashName();
        // }
        $product->save();
        return redirect('shop')->with('status', 'Produit ajouté !');
>>>>>>> nav
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return view('shop.product', [
=======
        return view('shop.view', [
>>>>>>> nav
=======
        return view('shop.detail', [
>>>>>>> news
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
