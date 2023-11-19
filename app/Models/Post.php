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
        if(isset($filters['search']) ? $filters['search'] : false){ // jika ada search, tampilkan 'title like % search % atau 'body like % search %'
            return $query = Post::where('title', 'like', '%'. $filters['search'] .'%')
                            ->orWhere('body', 'like', '%'. $filters['search'] .'%');
        }
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
