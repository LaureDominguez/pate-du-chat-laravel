<?php

namespace App\Http\Controllers;

use App\Models\ImageGallery;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ImageGalleryController extends Controller
{
    public function index()
    {
        $images = ImageGallery::get();
        return view('image-gallery', compact('images'));
    }

    // public function carousel()
    // {
    //     $images = ImageGallery::get();
    //     return $images;
    // }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $input['title'] = $request->title;
        ImageGallery::create($input);

        return back()
            ->with('success', 'Image correctement importé.');
    }

    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()
            ->with('success', 'Image correctement supprimée.');
    }
}
