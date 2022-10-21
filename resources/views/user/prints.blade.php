@extends('user/app')

@section('metatags')
<meta name="description" content="Prints">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')

@if (sizeof($prints)==0)
<body class="has-spotlight ashade-smooth-scroll">

    {{View::make('user/layouts/header')}}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>Prints</span>
                My Prints
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
<body class="has-spotlight ashade-albums-template ashade-albums-template--slider">

    {{ View::make('user/layouts/header') }}

    <!-- Content -->
    <div class="ashade-albums-slider-wrap">
        <div class="ashade-albums-slider is-fade" id="albums_slider">
            @foreach ($prints as $print)
            <div class="ashade-album-item">
                <div class="ashade-album-item__image" data-src="/storage/{{$print->image}}"></div>
                <div class="ashade-album-item__overlay"></div>
                <div class="ashade-album-item__title">
                    <h2>
                        <span>My Prints</span>
                        {{$print['title']}}
                    </h2>
                </div>
                <div class="ashade-album-item__explore">
                    <a href="{{route('print',$print->slug)}}">
                        <span>Click Here To</span>
                        Explore
                    </a>
                </div>
            </div>
            @endforeach

        </div><!-- .ashade-albums-slider -->
        <a href="#" class="ashade-slider-prev">Prev</a>
        <a href="#" class="ashade-slider-next">Next</a>
    </div><!-- .ashade-albums-slider-wrap -->

    {{View::make('user/layouts/copyrightfooter')}}

    {{View::make('user/layouts/aside')}}



    <script src="js/jquery.min.js"></script>
    <script src="js/ashade-slider.js"></script>
</body>

</html>
@endif

@endsection
