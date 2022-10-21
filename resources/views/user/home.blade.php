@extends('user/app')

@section('metatags')
<meta name="description" content="Home">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')
<body class="ashade-home-template has-spotlight ashade-smooth-scroll">

	{{View::make('user/layouts/header')}}

    <!-- Home Background -->
	<div class="ashade-home-background ashade-page-background is-slider">
		<div class="ashade-kenburns-slider" id="ashade-kenburns01" data-delay="4000" data-zoom="1.2" data-transition="2000">
            <?php
                $dir = "img/home/*.png";
                $images = glob( $dir );
            ?>
            @foreach ($images as $image)
            <div class="ashade-kenburns-slide" data-src="{{$image}}"></div>
            @endforeach
			{{-- <div class="ashade-kenburns-slide" data-src="img/home/home1.png"></div> --}}
		</div><!-- .ashade-kenburns-slider -->
	</div>

   <!-- Home Title and Back Button -->
    <div class="ashade-page-title-wrap is-inactive ">
        <h1 class="ashade-page-title">&nbsp;</h1>
    </div><!-- .ashade-page-title-wrap -->

    <div class="ashade-home-return ashade-back-wrap is-inactive">
        <div class="ashade-back is-home-return">
            <span>Return</span>
            <span>Back</span>
        </div>
    </div><!-- .ashade-to-top-wrap -->
@endsection

