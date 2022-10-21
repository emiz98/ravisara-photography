@extends('user/app')

@section('metatags')
<meta name="description" content="Tours">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')
    <body class="has-spotlight ashade-smooth-scroll">

        {{View::make('user/layouts/header')}}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>My Tours</span>
                {{$slug->title}}
            </h1>
        </div>

        <main class="ashade-content-wrap">
            <div class="ashade-content-scroll">
                <div class="ashade-content">
                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <p class="ashade-intro">{{$slug->description}}</p>
                            </div>
                        </div><br>
                        <div class="ashade-contact-form__submit" style="text-align: center;">
                            <a href="{{route('contact')}}"><input type="submit" value="Contact"></a>
                        </div>
                    </section>
                    <section class="ashade-section">
                        <div class="ashade-gallery-bricks is-2x3">
                            @foreach ($images as $item)
                            <div class="ashade-gallery-item">
                                <a href="/storage/{{$item->image}}" class="ashade-lightbox-link" data-size="{{$item->width}}x{{$item->height}}">
                                    <img src="img/null.png" data-src="/storage/{{$item->image}}" alt="New Family" class="lazy" width="{{$item->width}}" height="{{$item->height}}">
                                </a>
                            </div>
                            @endforeach
                        </div>
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
@endsection

