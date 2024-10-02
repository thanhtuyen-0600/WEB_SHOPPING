@extends('admin.layouts.app')


@section('content') 

    <div class="page-wrapper">
        
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">List Country</h4>
                </div>

                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">List Country
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
                    <div class="card">
                        <div class="card-body">
                                
                            <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách Country</h6>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            
                                            <tr>
                                                @foreach($country as $country)
                                                <tr>
                                                    <td>{{ $country->id }}</td>
                                                    <td>{{ $country->name }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/country/edit/'.$country->id) }}">Edit</a>
                                                        <a href="{{ route('country.delete', ['id' => $country->id]) }}">Delete</a>
                                                </td>
                                                </tr>
                                                @endforeach
           
                                            </tr>
                                        </tbody>
                                            <tr>
                                                <td colspan="3">
                                                    <a href="{{ url('/admin/country/add/') }}" class="button">Thêm</a>
                                                </td>
                                            </tr>
                                </table>
                               
                            </div>
                        </div>
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








