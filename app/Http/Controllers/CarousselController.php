<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarousselController extends Controller
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function rendder()
    {
        return view('components.caroussel');
    }
}
