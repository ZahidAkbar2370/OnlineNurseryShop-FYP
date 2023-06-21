<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = "invoices";

    protected $fillable = [
        "customer_id",
        "total_items",
        "sale_price",
        "status",
    ];

    function customer() {
        return $this->belongsTo(User::class, "customer_id", "id");
    }

    function product() {
        return $this->belongsTo(product::class, "product_id", "id");
    }
}
