<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideModel extends Model
{
    use HasFactory;
    protected $table ="Slides";
    protected $fillable = [
        "image",
    ];
}
