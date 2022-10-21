@extends('user/app')

@section('metatags')
<meta name="description" content="Gallery">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')
<body class="has-spotlight ashade-smooth-scroll">

    {{View::make('user/layouts/header')}}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>My Gallery</span>
                {{$slug['title']}}
            </h1>
        </div>

        <main class="ashade-content-wrap">
            <div class="ashade-content-scroll">
                <div class="ashade-content">
                    <section class="ashade-section">
                        <div class="ashade-gallery-adjusted ashade-grid ashade-grid-2cols">
                            @foreach ($images as $item)
                            <div class="ashade-gallery-item ashade-grid-item">
                                <a href="/storage/{{$item->image}}" class="ashade-lightbox-link" data-size="{{$item->width}}x{{$item->height}}">
                                    <img src="/storage/{{$item->image}}" data-src="/storage/{{$item->image}}" alt="Harley Davidson" class="lazy" width="{{$item->width}}" height="{{$item->height}}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>

                {{View::make('user/layouts/copyrightfooter')}}
            </div><!-- .ashade-content-scroll -->
        </main>

        <div class="ashade-to-top-wrap ashade-back-wrap">
            <div class="ashade-back is-to-top">
                <span>Back to</span>
                <span>Top</span>
            </div>
        </div>
@endsection

