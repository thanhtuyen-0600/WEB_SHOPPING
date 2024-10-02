@extends('frontend.layouts.app')

@section('content')

<div class="col-sm-9">
	<div class="blog-post-area">
		<h2 class="title text-center">Latest From our Blog</h2>
			<div class="single-blog-post">
				<h3>{{ $blog->title }}</h3>
					<div class="post-meta">
						<ul>
							<li><i class="fa fa-user"></i> {{ $blog->author }}</li>
							<li><i class="fa fa-clock-o"></i> {{ $blog->created_at->format('d/m/Y') }}</li>
							<li><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d/m/Y') }}</li>
						</ul>
								
					</div>
					<a href="">
						<img src="{{ $blog->image }}" alt="{{ $blog->title }}">
					</a>
						<p>
								$blog->content</p> <br>

						<div class="pager-area">
							<ul class="pager pull-right">
								<li><a href="{{ route('blogs.show', $pre->id) }}">Pre</a></li>
								<li><a href="{{ route('blogs.show', $next->id) }}">Next</a></li>
							</ul>
						</div>
					</div>
				</div><!--/blog-post-area-->
	
	<script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>


@endsection