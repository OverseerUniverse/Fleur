<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id', // Store session ID instead of user ID
        'likes_count', // Count of likes
    ];

    public static function getTotalLikesCount()
{
    return self::count();
}
}
