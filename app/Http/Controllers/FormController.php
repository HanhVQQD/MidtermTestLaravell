<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAddFroductRequest;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{

    public function getIndexAdmin(){
        return view('AdminPages.index');
    }

    public function postAdd (FormAddFroductRequest $request){
        $name = '';
        $file = $request->file('image');
        $image = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('/Images/Products');
        $file->move($destinationPath, $name);
        $arr =[
            'name' => $request->input('name'),
            'image' => $image,
            'price' => $request->input('price'),
            'promotionPrice' => $request -> input('promotionPrice'),
            'description' => $request->input('description'),
            'quantity' => $request -> input('quantity'),
            'id_type' => $request -> input('id_type'),
        ];
        return redirect()->route('AdminPages.add');
    }


    public function getAdd(){
        return view('AdminPages.add');
    }
}
