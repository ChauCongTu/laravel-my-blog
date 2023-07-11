<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'display_name',
        'email',
        'phone'
    ];
    public function posts(): HasMany {
        return $this->hasMany(Post::class, 'user_id');
    }
}
