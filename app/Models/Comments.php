<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Requests;

class Comments extends Model
{
    use HasFactory;
    public function users()
    { // FKrelationship
        return $this->hasMany(Users::class);
    }
    public function requests()
    { // FKrelationship
        return $this->hasMany(Requests::class);
    }
}
