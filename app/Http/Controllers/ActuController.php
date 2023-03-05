<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ActuController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $actu = new News;
        $actu->message = $request->message;

        $actu->save();



        // $this->validate($request, [
        //     'message' => 'required|string',
        // ]);
        // $input['message'] = $request->message;
        

        // $validated = $request->validate([
        //     'message' => 'required|string',
        // ]);
        
        // $request->user()->news()->create($validated);

        return  redirect('news')->with('status', 'Article ajouté !');
    }
}
