<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "description",
        "status",
        "category_id",
        "price",
        "weight",
        "img_url"
    ];
}
