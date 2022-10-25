@extends('layouts/contentLayoutMaster')

@section('title', '')
@section('vendor-style')
<style>
   
</style>
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">


<script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>


@endsection
@section('content')


        <div class="row " >
            <div class="col-lg-6 ">
                <div class="card ">
                <div class="card-body pt-0 mt-0">
                    
                    <div class="row pt-0">
                        
                        <div class="col-lg-6 mt-3">
                            
                            <h4 class="card-title p-0">
                                
                                Pack Details</h4>
                            <h5>Pack Name: <b> {{$pack->name}}</b></h5>
                            <h5>Pack Price: <b> ${{$pack->price}}</b></h5>
                            <h5>Pack Category: <b> {{$pack->category->name}}</b></h5>

                        </div>
                        <a href="{{url('Stickers')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a>

                    </div>


                    <p class="card-text"> </p>
                  </div>
            </div>
        </div>

    </div>
    <form action="{{route('update_sticker')}}" method="POST">
        @csrf
    <div class="row">
        <div class="col-12 ">
            <div class="alert alert-primary" role="alert">
                <div class="row " style="background-color: #f8f8f8">
                    <input type="hidden" name="packid" value="{{$pack->id}}">

                    @foreach ($pack->stickers as $key=>$sticker)
                    
                    <div class="col-3 " >
                        <div class="card text-left pt-1" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                            <img class="card-img-top" src="holder.js/100px180/" alt="">
                            
                            <div class="card-body" >
                              <div style=" display:flex; justify-content:center; background-color:#181818">
                                <lottie-player   autoplay mode="normal" src="{{ asset($sticker->file_path) }}"
                                    style="width: 100px;height:150px " class="mt-3">
                                 </lottie-player>
                              </div>
                                   
                                 
                                <p class="card-text mt-1 ">
                                    Tags:
                                   
                                   
                                    <input type="hidden" name="stickers[{{$key}}][stciker_id]" value="{{$sticker->id}}">
                                    <select class="form-select js-example-basic-multiple"    name="stickers[{{$key}}][tags][]"  aria-label="multiple select example" multiple  required> 
                                           @foreach ($tags as $tag)
                                               <option value="{{$tag->id}}" {{$sticker->tags->contains('id',$tag->id) ? "selected" : ""}}>{{$tag->name}}</option>
                                           @endforeach
                                      </select>
                                      <div class="form-group">
                                        <label for="">Character</label>
                         
                                        <input type="text" name="stickers[{{$key}}][character]" value="{{$sticker->emoji}}" id="" maxlength="1" class="form-control emojionearea1"  placeholder="" aria-describedby="helpId" required>
                                      </div>
                                      <br>
                                     
                                </p>
                            </div>
                         
                           
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
    </div>
   
    <!-- Button trigger modal -->




@endsection
@section('vendor-script')
  <!-- vendor files -->
  
  
  
@endsection