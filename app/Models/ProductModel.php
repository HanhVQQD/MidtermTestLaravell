<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table ="Products";

    public function product_type (){
        return $this -> belongsTo('App\Categories', 'id_type', 'id');
    }

    protected $fillable = [
        "name",
        "image",
        "price",
        "promotionPrice",
        "description",
        "quantity",
        "id_type",
    ];
}
