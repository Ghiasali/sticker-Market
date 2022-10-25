<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StickerPack;
use App\Models\Tag;
use App\Models\Sticker;
use App\Models\Category;
use Storage;
use File;
class StickerController extends Controller
{
    //
    function store_pack(Request $request){
        $request->all();
       
        $request->merge(['trending'=>0]);
      
       $pack= StickerPack::create([
         'name'=>$request->name,
         'slug'=>$request->slug,
         'trending'=>0,
         'published'=>$request->published,
         'free'=>$request->free,
         'price'=>$request->price,
         'type'=>$request->type,
         'category_id'=>$request->category_id,
         'creator_id'=>$request->creator_id

     ]);
       if($request->hasFile('files')){
           
       // return $request->files;
                foreach ($request->file('files') as $key => $file) {
                     $path = Storage::disk('public')->putFile('stickers', $file);
                     $filename = Storage::URL($path);
                     $pack->stickers()->create(['file_path'=>$filename]);
            }
        }
        return redirect('/pack/'.$pack->id);
       }

       function update_pack($id){
             $pack= StickerPack::whereId($id)->with('stickers')->first();
             $tags=Tag::all();
            return view('pages.update_sticker')
            ->with('pack',$pack)
            ->with('tags',$tags);
        }

        function trash_sticker($id){
                 $sticker= Sticker::findorfail($id);
                  try {
                    unlink(substr($sticker->file_path,1));
                  } catch (\Throwable $th) {
                    $sticker->delete();
                    return back()->with('msg','Sticker trash');
                  }
                  $sticker->delete();
                  return back()->with('msg','Sticker trash');
        }
        function editsticker_view($id){
         // return "ss";
          $pack= StickerPack::whereId($id)->with('stickers')->first();
          $categories=Category::all();
          $tags=Tag::all();
          return view('pages.edit_sticker')
          ->with('pack',$pack)
          ->with('categories',$categories)
          ->with('tags',$tags);
        }
        function update_sticker(Request $request){
         // return $request->all();
          foreach ($request->stickers as $key => $sticker) {
           $rowsticker=Sticker::find($sticker['stciker_id']);
          $rowsticker->update(['emoji'=>$sticker['character']]);
          foreach ($sticker['tags'] as  $key=>$tag) {
            $tagrecord=Tag::whereId($tag)->first();
            if(!$tagrecord){
              $tagrecord=  Tag::create(['name'=>$tag]);
              $sticker['tags'][$key]=$tagrecord->id;
            }
          }
          $rowsticker->tags()->sync($sticker['tags']);
         
        }
          // $sticker=Sticker::find($request->sticker_id);
          // $sticker->update(['emoji'=>$request->character]);
          // $sticker->tags()->sync($request->tags);
          return redirect('/Stickers')->with('msg','Sticker updated');
        }
       
}
