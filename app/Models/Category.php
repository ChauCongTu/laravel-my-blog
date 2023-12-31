<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 'parent_id'
    ];
    public function child(): HasMany {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    public function posts(): HasMany {
        return $this->hasMany(Post::class, 'category_id');
    }
}
