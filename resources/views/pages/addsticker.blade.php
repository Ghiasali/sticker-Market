@extends('layouts/contentLayoutMaster')
@section('vendor-style')

<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">





@endsection
@section('title', '')

@section('content')
<form action="{{url('store_pack')}}" method="post" id="stickerform" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                <div class="row " style="background-color: #f8f8f8">
                    <div class="col-lg-8 " >
                        <div class="card text-left pt-1" style="height: 600px;">
                            <img class="card-img-top" src="holder.js/100px180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title"> <a href="{{url('Stickers')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a> New
                                    Sticker Pack</h4>
                                <p class="card-text">
                                <div class="row text-dark">
                                    {{-- <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">ID</label>
                                            <input type="text" name="" id="" class="form-control" placeholder=""
                                                aria-describedby="helpId">
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                                aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">Slug(Text line)</label>
                                            <input type="text" name="slug" id="" class="form-control" placeholder=""
                                                aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">Creator</label>
                                            <select name="creator_id" id="" class="form-control" required>
                                                <option value="">Select</option>
                                                @foreach ($creators as $cr)
                                                <option value="{{$cr->id}}" >{{$cr->name}}</option>
                                                @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="category_id" id="" class="form-control" required>
                                                <option value="">Select</option>
                                                @foreach ($categories as $cat)
                                                <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                                @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="number" name="price" id="" class="form-control" placeholder=""
                                                aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-1">
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <select name="type" id="" class="form-control">
                                                <option value="">Select</option>
                                                <option value="type1">type1</option>
                                                <option value="type2">type2</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-left">
                            <img class="card-img-top" src="holder.js/100px180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title font-weight-bolder">Other Option</h4>
                                <p class="card-text">
                                <div class="row m-6 border py-1 ">
                                    <div class="col-4 " style="white-space: nowrap;">
                                        <h4>Published</h4>
                                    </div>
                                    <div class="col-8 text-dark">
                                        <input type="radio" class="form-check-input" name="published" value="1" id="s" checked>
                                        Yes
                                        <input type="radio" class="form-check-input" name="published" value="0" id="s" >
                                        No
                                    </div>

                                </div>
                                <div class="row py-1 border  border-radius-sm ">
                                    <div class="col-4 " style="white-space: nowrap;">
                                        <h4 class="text-start pr-1">Free</h4>
                                    </div>
                                    <div class="col-8 text-dark  ">
                                        <input type="radio" class="form-check-input pl-1" name="free" id="s" value="1" checked>
                                        Yes
                                        <input type="radio" class="form-check-input" name="free" id="s" value="0">
                                        No
                                    </div>
                                </div>


                                @include('pages.modals.addpack')
                            </div>
                            <p id="msg" class="text-danger text-center"></p>
                            <button type="button" class="btn btn-light mx-2 my-1 btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add-pack"> Add Pack</button>
                            <button type="submit"  class="btn btn-primary mx-2 my-1" style="background-color: #2502B4 !important">Save</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    </div>
    

    <!-- Button trigger modal -->

  

    
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script>
//emoji selection 


var count=1
function adduploader(){
$("#filesrow").append(`
<div class="col-lg-6 pt-1 m-2 border"  style="width:300px;height:100px">
<label>Choose File</label>
  <input type="file" class="form-control fileuploader"  name='files[`+count+`]' >
</div>

`)
count+=1
}
var fileuploaded=false;
function test(){
    $('.question').emojiPicker({
  height: '300px',
  width:  '450px'
});
}

   var emojiPicker=
  {
    "emojis": [
        {
            "name": "grinning",
            "unicode": {"apple":"1F600", "google":"1F600", "twitter":"1F600"},
            "shortcode": "grinning",
            "description": "GRINNING FACE",
             "category": "people"

        }
            ]  
  }

$(document).ready(function() {
 
$("#stickerform").submit(function( event ) {
  $("#msg").empty();
  event.preventDefault();
  if(!fileuploaded){
  $("#msg").append(`Plaese attach atleast one sticker`)
    return;
  }else{

    $("#stickerform")[0].submit()
  }
});

$('.fileuploader').on("change", function(e){ 
fileuploaded=true
});
} );


</script>

@endsection
