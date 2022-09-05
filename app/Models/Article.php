<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ActiveScope;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
    	return	$this->belongsTo(User::class);
    }

    protected static function booted()
    {
    	static::addGlobalScope(new ActiveScope);
    }
}