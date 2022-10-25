@extends('layouts/contentLayoutMaster')
@section('title', '')
@section('content')
@section('vendor-style')
<style>
   
</style>
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">


<script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>


@endsection
<div class="row">
   <div class="col-lg-2"></div>
   <div class="col-12 ">
      <form action="{{route('update_tags')}}" method="post" id="form">
         @csrf
         <input type="hidden" name="pack_id" value="{{$pack->id}}" id="">
         <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
               <h4 class="card-title">Update stickers</h4>
               

               <div class="row ">

                  @foreach ($pack->stickers as $stickerkey=>$sticker)
                  
                  <input type="hidden" name="tag[{{$stickerkey}}][sticker_id]" value="{{$sticker->id}}" id="">

                  <div class="col-lg-3 mx-1 p-0   mb-4 align-middle"  style="border-top-left-radius:50px 20px;">
                  <div style=" display:flex; justify-content:center; border-top-right-radius: 25px; border-top-left-radius: 25px;background-color:#181818" >
                     <lottie-player   autoplay mode="normal" src="{{ asset($sticker->file_path) }}"
                        style="width: 100px;height:150px " class="mt-3">
                     </lottie-player>
                  </div>
                  <div class="border">
                     <div class="form-group mt-0 text-start p-1">
                        <label for="">Character</label>
                        <input type="text"  name="tag[{{$stickerkey}}][character]" maxlength="1"  id="" class="form-control emojionearea1" placeholder="Enter Character"
                           aria-describedby="helpId" required>
                     </div>
                     {{-- <div id="show_imojis"></div>
    <emoji-picker></emoji-picker> --}}
                     
                       <div class="form-group mt-1 mb-1 p-1">
                       <label for="">Select tags</label>
                           <select class="js-example-basic-multiple form-control" name="tag[{{$stickerkey}}][tag_ids][]" multiple placeholder="s">
                              @foreach ($tags as $tagkey=>$tag)
                              <option value="{{$tag->id}}"> {{$tag->name}}</option>
                              @endforeach
                          </select>
                       </div>
                  </div>







                </div>
                  @endforeach
                </div>

                <button class="btn btn-primary"  type="submit" >Save</button>
            </div>
         </div>
      </form>
   </div>
</div>
</div>

{{-- <h1>jquery.emojiarea.js Example</h1>
		
<div class="example">
   <h2>Plain-Text</h2>
   <form><textarea rows="5" class="emojis-plain">Hello :neckbeard:</textarea></form>
</div>

<textarea class="mytextarea">ASCII art is great, but...</textarea> --}}
{{-- <textarea id="emojionearea1">Default :smile:</textarea> --}}





@endsection
@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script>
        
//    document.querySelector('emoji-picker')
//   .addEventListener('emoji-click', event =>

// //   console.log(event.detail)
//   setemoji(event.detail)
//   );
//   function setemoji(emoji){
//       console.log('imoji'+JSON.stringify(emoji.unicode))
//       $("#show_imojis").html(`<h1 style="padding:2px">`+emoji.unicode+`<h1>`)
//   }
  </script>
  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection
