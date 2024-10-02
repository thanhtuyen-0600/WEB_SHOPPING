@extends('admin.layouts.app')

@section('content') 
 
    <div class="page-wrapper">
           
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Creater Blog</h4>
                </div>

                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Creater Blog</li>
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
                        <h4 class="card-title">Create Blog</h4>      
                            <form action="{{ url('admin/blog/list') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data">

                            @csrf 

                            <!-- Title -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="title" required>
                                </div>

                            <!-- Image -->
                                <div class="form-group">
                                    <label for="fileInput">Image</label>
                                    <input type="file" name="image" id="fileInput" class="form-control" placeholder="Select an image">
                                </div>

                            <!-- Description -->
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                </div>

                            <!-- Content -->
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                                </div>

                            <!-- Button Submit -->
                                <button type="submit" class="btn btn-primary">Create Blog</button>
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

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script> CKEDITOR.replace('content'); </script>

@endsection






