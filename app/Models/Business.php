<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
}
