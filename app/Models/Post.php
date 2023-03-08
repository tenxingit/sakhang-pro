<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\Derim;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
public function staffs(): HasMany{
   return $this->hasMany(Staff::class);
}

public function derim(): BelongsTo{
   return $this->belongsTo(Derim::class);
}
}
