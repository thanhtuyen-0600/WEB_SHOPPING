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

    <div class="login-form"><!--login form-->
        <h2>Login to your account</h2>
        <form method="post" action="{{url('frontend/member/blog')}}">

            @csrf
            <input type="email" name="email" placeholder="Email"/>

            <input type="password" name="password" placeholder="Password" />

            <span>
                <input type="checkbox" class="checkbox"> 
                Keep me signed in
            </span>
            
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div><!--/login form-->
</div>

<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>


@endsection
