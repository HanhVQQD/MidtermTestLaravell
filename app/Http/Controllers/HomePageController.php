<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getIndexHomePage() {
        $slide = ProductModel::all();
        return view('UserPages.index', compact('slide'));
    }
}
