<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status', 1)->orderBy('serial', 'asc')->get();
        return view('frontendv2.home.home',
        compact(
            'slider'
        ));
    }
}
