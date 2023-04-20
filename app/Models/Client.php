<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Client extends Model implements HasMedia, \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory, HasRoles, InteractsWithMedia;

    protected $guarded = ["id"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection("owner-avatar");
        $this->addMediaCollection("supplier-avatar");
        $this->addMediaCollection("client-permission-letter");
        $this->addMediaCollection("client-business-galleries");
    }

    public function getAuthIdentifier()
    {
        return $this->attributes["email"];
    }

    public function getAuthIdentifierName()
    {
        return "name";
    }

    public function getAuthPassword()
    {
        return $this->attributes["password"];
    }

    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value)
    {
        // do nothing
    }

    public function getRememberTokenName()
    {
        return null;
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
