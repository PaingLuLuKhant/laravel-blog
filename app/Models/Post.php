<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',        
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function likers()
    {
        return $this->belongsToMany(User::class, 'post_user_likes')->withTimestamps();
    }
}
