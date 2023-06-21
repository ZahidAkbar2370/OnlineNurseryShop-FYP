<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        "category_id",
        "item_name",
        "sale_price",
        "discount_price",
        "description",
        "status",
        "image_1",
        "image_2",
        "image_3",
    ];

    function category() {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    function invoice() {
        return $this->belongsTo(Invoice::class, "invoice_id", "id");
    }
}
