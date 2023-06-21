<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        "invoice_id",
        "item_id",
        "sale_price",
        "discount_price",
        "total_price",
        "quantity",
    ];
}
