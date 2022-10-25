<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StickerPack extends Model
{
    use HasFactory;
    protected $guarded=[];
    function stickers(){
        return $this->hasMany(Sticker::class);
    }
    function category(){
        return $this->belongsTo(Category::class);
    }
}
