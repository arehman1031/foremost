@extends('layouts.site.app')

@section('content')
<div class="fullwidth-block latest-news-section">
	<div class="container">
		<div class="hero hero-slider">
			<div class="slides">
				<h2 class="slider-title">{{ $parlor->name }} <a href="{!! Storage::url($parlor->image) !!}" class="pull-right" ><img src="{!! Storage::url($parlor->image) !!}" alt="{!! $parlor->name !!}" height="100px" width="200px"></a></h2>

			</div>
			<hr/>
			<p> {{ $parlor->desc }}</p>
		</div>
	</div>
</div>
@endsection
