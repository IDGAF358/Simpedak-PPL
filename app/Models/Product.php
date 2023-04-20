<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function ProductTypes()
    {
        return $this->hasMany(ProductType::class);
    }

    public function RawProductOwners()
    {
        return $this->hasMany(RawProductOwner::class);
    }

    public function ServeProductOwners()
    {
        return $this->hasMany(ServeProductOwner::class);
    }
}
