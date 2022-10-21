<!-- Header -->
<header id="ashade-header">
    <div class="ashade-header-inner">
        <div class="ashade-logo-block">
            <a href="{{ route('/') }}" class="ashade-logo is-retina">
                <img src="{{ asset('img/logo.png') }}" alt="Ashade Logo" width="128" height="110">
            </a>
        </div>
        <div class="ashade-nav-block">
            <nav class="ashade-nav">
                <ul class="main-menu">
                    <li class="menu-item-has-children"><a href="{{ route('/') }}">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Gallery</a>
                        <ul class="sub-menu">
                            @foreach (App\Models\admin\galleryCategory::get()->where('status', 1) as $menuItem)
                                <li class="menu-item-has-children">
                                    <a href="{{ route('gallery', $menuItem['slug']) }}">{{ $menuItem['title'] }}</a>
                                </li>
                            @endforeach
                            {{-- <li class="menu-item-has-children">
                                <a href="{{route('gallery')}}">Monochrome</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="{{ route('blogs') }}">Blogs</a></li>
                    @if (App\Models\admin\tourCategory::get()->where('status', 1)->count()==0)
                    @else
                    <li class="menu-item-has-children">
                        <a href="#">Tours</a>
                        <ul class="sub-menu">
                            @foreach (App\Models\admin\tourCategory::get()->where('status', 1) as $menuItem)
                                <li class="menu-item-has-children">
                                    <a href="{{ route('tour', $menuItem['slug']) }}">{{ $menuItem['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    <li class="menu-item-has-children"><a href="{{ route('prints') }}">Prints</a></li>
                    <li class="menu-item-has-children"><a href="{{ route('about') }}">About</a></li>
                    <li class="menu-item-has-children"><a href="{{ route('contact') }}">Contact</a></li>
                    <li>
                        <a href="#" class="ashade-aside-toggler">
                            <span class="ashade-aside-toggler__icon01"></span>
                            <span class="ashade-aside-toggler__icon02"></span>
                            <span class="ashade-aside-toggler__icon03"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
