<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Derim extends Model
{
    use HasFactory;

    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }

    public function staffs()
    {
        return $this->hasOneThrough(Staff::class, Post::class);
    }
}
