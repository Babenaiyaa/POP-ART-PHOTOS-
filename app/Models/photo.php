<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['user_id', 'theme_id', 'image_path', 'likes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
    public function likedByUsers()
{
    return $this->belongsToMany(User::class, 'likes');
}

}
