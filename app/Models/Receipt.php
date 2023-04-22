<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function RawProduct()
    {
        return $this->belongsTo(Product::class, "raw_product_id");
    }

    public function ServeProduct()
    {
        return $this->belongsTo(Product::class, "serve_product_id");
    }
}
