<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'author']; // move from controller

    public function scopeFilter($query, array $filters)
    {
        // jika ada search, tampilkan 'title like % search % atau 'body like % search %'
        $query->when($filters['search'] ?? false, function($query, $search){ // null coalescing operator
            return $query->where('title', 'like', '%'. $search .'%')
                        ->orWhere('body', 'like', '%'. $search .'%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author() // column 'user_id' with alias 'author'
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
