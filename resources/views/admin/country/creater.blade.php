@extends('admin.layouts.app')

@section('content') 

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Add Country</h4>
                </div>

                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Country</li>
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

                        <h4 class="card-title">Creater Country</h4>
                            <form action="{{ url('admin/country/add') }}" method="POST" class="form-horizontal m-t-30">
        
                            @csrf 
                            <div class="form-group">

                                <label>NAME<span class="help"> e.g. "Việt Nam"</span></label>
                                    
                                <input type="text" name="name" id="name" class="form-control" required>

                            </div>
       
                                <button type="submit" class="btn btn-primary">Add Country</button>
                            </form>
    

                    </div>
                                
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






