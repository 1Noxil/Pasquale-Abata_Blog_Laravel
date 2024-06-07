<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable=['social-id','social-name','social-avatar','email','user_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
