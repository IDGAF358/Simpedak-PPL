<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawProductOwner extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
}
