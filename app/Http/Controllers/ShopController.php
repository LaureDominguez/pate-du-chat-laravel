<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.shop', [
            'articles' => Shop::all()
        ]);
    }

    public function show(Shop $article)
    {        
        return view('shop.article', [
            'article' => $article
        ]);
    }
}
