
@extends('layouts/contentLayoutMaster')

@section('title', '')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
<div class="row">
    @if(Session::has('msg'))
    <h3 class="alert text-info">{{Session('msg')}}</h3>
    @endif
</div>
<!-- Basic table -->

<!--/ Basic table -->

<!-- Complex Headers -->
<div class="card text-left">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
        <h4 class="card-title">
            <div class="text-start" style="font-family: Manrope">
                Sticker List
            </div>

            <div class="text-end">
                <a class="btn btn-primary" href="{{ route('Addpack') }}"
                    style="background-color: #2502B4 !important;font-family: 'Montserrat';!important"> <i
                        class="fa fa-plus" aria-hidden="true"></i> Add Pack</a>
                {{-- <button class="btn btn-light">Unpublish</button> --}}
            </div>
        </h4>
        <p class="card-text">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr style="color: #2502B4">
                    <th>Sticker</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Published(YES/NO)</th>
                    <th>Price</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($packs as $pack)
                <tr>
                    <td class="d-flex">
                        {{-- <img src="images/icons/id.svg" alt=""> --}}

                        <lottie-player loop autoplay mode="loop" src="{{$pack->stickers[0]->file_path}}"
                            style="width: 50px;height:50px">
                        </lottie-player>


                    </td>
                    <td><a href="{{url('edit_sticker',$pack->id)}}" >{{$pack->name}}</a></td>
                    <td> <span class="badge bg-info text-dark">{{$pack->category->name}}</span></td>
                    <td>
                        @if($pack->published==1)
                        <span class="badge rounded-pill  badge-light-success">YES</span>
                        @else
                        <span class="badge rounded-pill  badge-light-danger">No</span>
                        @endif
                    </td>
                    <td>${{$pack->price}}</td>
                    {{-- <td> --}}
                        {{-- <a href="{{url('edit_sticker',$pack->id)}}" ><img src="images/icons/trash.svg" alt=""> --}}
                        {{-- <a href="{{url('trash_sticker',$pack->id)}}" onclick="return confirm('wants to trash sticker')"><img src="images/icons/edit.svg" alt=""> --}}
                    {{-- </td> --}}
                </tr>
                @endforeach

            </tbody>

        </table>
        <p class="mt-4 ">{{$packs->links()}} </p>
        </p>
    </div>
</div>
<!--/ Complex Headers -->

<!-- Row grouping -->

<!--/ Multilingual -->
@endsection


@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
  <script src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-1/js/scripts/tables/table-datatables-basic.js?id=27506e94928394037c84"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>
    <link type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


@endsection
@section('page-script')
  {{-- Page js files --}}
  <script>
      $(document).ready(function() {
        $('#example').DataTable(
           
        {
            searching: true,
            order: false,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            bPaginate:false,
            "targets": 'no-sort',
            "bSort": false,
        }
 
        );
        });
  </script>
  
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>
@endsection
