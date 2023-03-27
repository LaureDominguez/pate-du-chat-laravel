<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ActuController extends Controller
{
    public function index():View
    {
        $news = News::all();
        // dd($news);
        return view('news.index', [
            'news' => $news
        ]);
    }



    public function store(Request $request): RedirectResponse
    {
        $actu = new News;
        $actu->message = $request->message;
        $actu->save();

        return  redirect('news')->with('status', 'Article ajouté !');
    }
}
