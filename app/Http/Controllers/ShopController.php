<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop', [
            'articles' => Shop::all()
        ]);
    }

    public function show(Shop $article)
    {
        // $shop = Shop::findOrFail($id);
        
        return view('article', [
            'article' => $article
        ]);
    }
}
