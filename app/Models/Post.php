<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_datetime',
        'title',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function contents()
    {
        return $this->hasOne(Content::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
