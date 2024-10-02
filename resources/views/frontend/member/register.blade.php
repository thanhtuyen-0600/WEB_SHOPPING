@extends('frontend.layouts.header')

@section('content')

<div class="col-sm-4 col-sm-offset-1">
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="login-form">
        <h2>Register</h2>
        <form method="post" action="{{url('frontend/member/login')}}" enctype="multipart/form-data">
        @csrf

            <div class="form-group">
                <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">

                                           
                    <input type="text" name ="name"value=""
                    placeholder="name" class="form-control form-control-line">
                                            

                    </div>
            </div>        
           
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" name="email" value="" placeholder="Email" class="form-control form-control-line" >
                                            
                    </div>
            </div>


            <div class="form-group">
                <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="password" name="password" value="" class="form-control form-control-line">
                    </div>
            </div>
                                    
            <div class="form-group">
                <label class="col-md-12">Phone No</label>
                    <div class="col-md-12">
                        <input type="text" name="phone" placeholder="Phone" class="form-control form-control-line">
                    </div>
            </div>
                                    
            <div class="form-group">
                <label class="col-sm-12">Select Country</label>
                    <div class="col-sm-12">
                        <select name="address" class="form-control form-control-line">
                        @foreach ($country as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control-file" id="avatar" name="avatar">
                                        
            </div>

            <div>
            
             <button type="submit" class="btn btn-default">Register</button>

            </div>

        </form>
    </div>
</div>

@endsection

