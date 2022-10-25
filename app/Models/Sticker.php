<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    use HasFactory;
    protected $guarded=[];
    function tags(){
        return $this->belongsToMany(Tag::class);
    }
    function pack(){
        return $this->belongsTo(StickerPack::class,'sticker_pack_id')->with('category');
    }
}
