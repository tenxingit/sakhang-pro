<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
  protected $table = 'Staffs';
  protected $guarded = [];

  public function post(){
    return $this->belongsTo(Post::class);
  }

  public function derim(){
    return $this->belongsToThrough(Derim::class, Post::class);
  }
}
