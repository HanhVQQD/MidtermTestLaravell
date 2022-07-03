<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Database\Seeders\Categories;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getIndexHomePage() {
        $slide = ProductModel::all();
        $TopProduct = ProductModel::where('promotionPrice','<>', 0) -> paginate(8);
        return view('UserPages.index', compact('slide','TopProduct'));
    }

    public function getProduct_type($type){			
    	$product_type = CategoryModel::all();
        $sp_theoloai = ProductModel::where ('id_type', $type) -> get();
        $the_loai = CategoryModel::find($type);
        return view('UserPages.productType', compact('sp_theoloai','product_type', 'the_loai'));
    }

    public function getDetail_product($id){	
        $product = ProductModel::find($id);	
    	return view('UserPages.productDetail', compact('product'));		
    }

}
