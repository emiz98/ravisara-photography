@extends('user/app')

@section('metatags')
<meta name="description" content="Blogs">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')
@if (sizeof($blogs)==0)
<body class="has-spotlight ashade-smooth-scroll">

    {{View::make('user/layouts/header')}}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>Blogs</span>
                My Blogs
            </h1>
        </div>

        <main class="ashade-content-wrap">
            <div class="ashade-content-scroll">
                <div class="ashade-content">
                    <section class="ashade-section">
                        <div class="ashade-row ashade-row-middle">
                            <div class="ashade-col col-12" style="text-align: center; font-size:35px;">
                                Currently <br><br> Not Available
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                    </section>
                </div><!-- .ashade-content -->

                {{View::make('user/layouts/copyrightfooter')}}
            </div><!-- .ashade-content-scroll -->
        </main>

        <div class="ashade-to-top-wrap ashade-back-wrap">
            <div class="ashade-back is-to-top">
                <span>Back to</span>
                <span>Top</span>
            </div>
        </div>
@else
<body class="has-spotlight ashade-albums-template ashade-albums-template--carousel">
    {{ View::make('user/layouts/header') }}

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Blogs</span>
            My Blogs
        </h1>
    </div>


	<div class="ashade-albums-carousel-wrap">
		<div class="ashade-albums-carousel is-vertical" id="albums_carousel">
            @foreach ($blogs as $blog)
                <div class="ashade-album-item">
                    <div class="ashade-album-item__inner">
                        <img src="/storage/{{ $blog->image }}" alt="My Special Day" width="{{$blog->width}}" height="{{$blog->height}}">
                        <div class="ashade-album-item__overlay"></div>
                        <div class="ashade-album-item__title">
                            <h2>
                                <span>My Blog</span>
                                {{ $blog['title'] }}
                            </h2>
                        </div>
                        <a href="{{ route('blog', $blog->slug) }}" class="ashade-button">Explore</a>
                    </div>
                </div>
            @endforeach
		</div>
	</div>

    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Back to</span>
            <span>Top</span>
        </div>
    </div>

    {{ View::make('user/layouts/copyrightfooter') }}


    {{-- <body class="has-spotlight ashade-albums-template ashade-albums-template--carousel">

        {{ View::make('user/layouts/header') }}

        <div class="ashade-albums-carousel-wrap">
            <div class="ashade-albums-carousel is-medium" id="albums_carousel">
                @foreach ($blogs as $blog)
                    <div class="ashade-album-item">
                        <div class="ashade-album-item__inner">
                            <img src="/storage/{{ $blog->image }}" alt="My Special Day" width="{{$blog->width}}" height="{{$blog->height}}">
                            <div class="ashade-album-item__overlay"></div>
                            <div class="ashade-album-item__title">
                                <h2>
                                    <span>My Blog</span>
                                    {{ $blog['title'] }}
                                </h2>
                            </div>
                            <a href="{{ route('blog', $blog->slug) }}" class="ashade-button">Explore</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="ashade-albums-carousel-progress">
                <div class="ashade-albums-carousel-progress__bar"></div>
            </div>
        </div>

        {{ View::make('user/layouts/copyrightfooter') }} --}}
    @endsection


    @section('ribbon')
    <script src="{{asset('js/ashade-ribbon.js')}}"></script>
    @endsection
@endif
