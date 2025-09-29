<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'code', 'gamecategory_id'
    ];

    public function category()
    {
        return $this->belongsTo(GameCategory::class, 'gamecategory_id');
    }

    public function gameUsers()
    {
        return $this->hasMany(GameUser::class);
    }
}
