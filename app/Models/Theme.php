<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = ['name'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function handle()
    {
        $nextTheme = Theme::where('active', false)->first();
        Theme::query()->update(['active' => false]);
        $nextTheme->update(['active' => true]);
    }
}
