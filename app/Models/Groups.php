<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Groups extends Model
{
    use HasFactory;
    public function users()
    { // FK relationship
        return $this->belongsTo(Users::class);
    }
}
