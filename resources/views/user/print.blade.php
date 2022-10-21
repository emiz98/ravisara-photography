@extends('user/app')

@section('content')

    <body class="has-spotlight ashade-smooth-scroll">

        {{ View::make('user/layouts/header') }}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>My Prints</span>
                {{ $slug->title }}
            </h1>
        </div>

        <main class="ashade-content-wrap">
            <div class="ashade-content-scroll">
                <div class="ashade-content">
                    <div class="row" style="margin-bottom: 10%;">
                        <div class="col-12 col-sm-6" style="text-align: center; margin-bottom: 5%;">
                            <div class="ashade-gallery-item">
                                <a href="#">
                                    <img src="/storage/{{ $slug->image }}" data-src="/storage/{{ $slug->image }}"
                                        alt="New Family" class="lazy" width="1800" height="1200">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3>{{ $slug->title }}</h3>
                            <div class="ashade-contact-form__submit" style="margin-bottom: 5%">
                                <div style="margin-bottom: 2%">Available Sizes</div>
                                <a href="#" style="pointer-events: none;cursor: default;"><input type="submit"
                                        value="12x18 (inches)" style="color: #a5a5a5"></a>
                                <a href="#" style="pointer-events: none;cursor: default;"><input type="submit"
                                        value="16x24 (inches)" style="color: #a5a5a5"></a>
                                <a href="#" style="pointer-events: none;cursor: default;"><input type="submit"
                                        value="Custom" style="color: #a5a5a5"></a>
                            </div>
                            <div style="font-size: 30px; margin-bottom: 5%">{{ $slug->price }} LKR</div>
                            <hr />
                            <p class="ashade-intro" style="text-align: left">{{ $slug->description }}</p>
                            <div class="ashade-contact-form__submit">
                                <a href="{{ route('contact') }}"><input type="submit" value="Enquire About This Print"></a>
                            </div>
                        </div>
                    </div>

                    <section class="ashade-section">
                        <div class="ashade-gallery-bricks is-2x3">
                            @foreach ($images as $item)
                            <div class="ashade-gallery-item">
                                <a href="/storage/{{ $item->image }}" class="ashade-lightbox-link"
                                    data-size="{{$item->width}}x{{$item->height}}">
                                    <img src="img/null.png" data-src="/storage/{{ $item->image }}"
                                        alt="New Family" class="lazy" width="{{$item->width}}" height="{{$item->height}}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div><!-- .ashade-content -->

                {{ View::make('user/layouts/copyrightfooter') }}
            </div><!-- .ashade-content-scroll -->
        </main>

        <div class="ashade-to-top-wrap ashade-back-wrap">
            <div class="ashade-back is-to-top">
                <span>Back to</span>
                <span>Top</span>
            </div>
        </div>
    @endsection
