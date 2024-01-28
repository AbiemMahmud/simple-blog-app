<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_text',
        'post_id'
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
