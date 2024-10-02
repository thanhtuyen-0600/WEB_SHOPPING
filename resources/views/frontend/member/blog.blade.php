@extends('frontend.layouts.app')

@section('content')

<div class="col-sm-9">
	<div class="blog-post-area">
		<h2 class="title text-center">Latest From our Blog</h2>
		@foreach ($blogs as $blog)
			<div class="single-blog-post">

				<h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
				<div class="post-meta">
						<ul>
							<li><i class="fa fa-user"></i>{{ $blog->author }}</li>
							<li><i class="fa fa-clock-o"></i> {{ $blog->created_at->format('d/m/Y') }}</li>
							<li><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d/m/Y') }}</li>
						</ul>
				
						<span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						</span>
					</div>

					<a href="">

								<img src="{{ $blog->image }}" alt="{{ $blog->title }}">
						</a>

						<p>{{ $blog->content}}</p>

						<a  class="btn btn-primary" href="{{ route('blog.show', $blog->id) }}">Read More</a>
						
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
			
			</div>
		@endforeach

	</div>
</div>			
            	
    
    <!-- Hiển thị phân trang -->
    {{ $blogs->links() }}
							
	<script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>

@endsection