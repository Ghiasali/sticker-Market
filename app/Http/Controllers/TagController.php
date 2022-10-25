<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sticker;
use App\Models\Tag;
class TagController extends Controller
{
    //
    function update_tags(Request $request){
   //return $request->all();
        foreach ($request->tag as $key => $tagone) {
           //return $tagone;
                $sticker= Sticker::find($tagone['sticker_id']);
                $sticker->update(['emoji'=>$tagone['character']]);
                if(isset($tagone['tag_ids'])){
                    //return $tagone['tag_ids'];
                    foreach ($tagone['tag_ids'] as  $key=>$tag) {
                        //return $tag;
                        $tagrecord=Tag::whereId($tag)->first();
                        if(!$tagrecord){
                           
                          $tagrecord=  Tag::create(['name'=>$tag]);
                          $tagone['tag_ids'][$key]=$tagrecord->id;
                        }
                      }
                    //   $rowsticker->tags()->sync($sticker['tags']);
                    $sticker->tags()->sync($tagone['tag_ids']);
                }
               
                
                 
                
        }   
        return redirect('/Stickers')->with('msg','Sticker added');;

    }
}
