<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Groups;
use App\Models\Comments;
use App\Models\Requests;

class Users extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname','email', 'password'];
    public function groups()
    {
        return $this->hasMany(Groups::class);
    }
    public function comments()
    { // FK relationship
        return $this->belongsTo(Comments::class);
    }
    public function requests()
    { // FK relationship
        return $this->belongsTo(Requests::class);
    }
}
