@extends('admin.layouts.app')

@section('content') 

    <div class="page-wrapper">
           
        <div class="page-breadcrumb">

            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Edit Country</h4>
                </div>

                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Country
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-body">

                        <h4 class="card-title">Edit thông tin</h4>

                        @if($errors->any())  
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>

                        @endif

                        <form method="POST" class="form-horizontal m-t-30">
                        <div class="form-group">

                            @csrf 
                            <label for="ten">NAME  <span class="help"> </span> </label>
                            <input type = "text" name ="ten"class="form-control"  value="<?php echo $data->name;?>">
                            <br>

                            <button type="submit">Update thông tin</button>
                        </div>

                        </form>            
                </div>
            </div>
                
             
        </div>

    </div>
 
    <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>

    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
@endsection














    