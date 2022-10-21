<div class="cookie-container">
    <div>
       <span>We use cookies to personalise content, provide social media features, and analyse traffic. To disable cookies,
        this can be configured via the web browser. However this can limit your experience with our website.</span>
    </div>
    <div class="center"><span class="cookie-banner-button">Accept Cookies</span></div>
</div>


<!-- UI Elements -->
<div class="ashade-menu-overlay"></div>
<div class="ashade-aside-overlay"></div>
<div class="ashade-cursor is-inactive">
    <span class="ashade-cursor-circle"></span>
    <span class="ashade-cursor-slider"></span>
    <span class="ashade-cursor-close ashade-cursor-label">Close</span>
    <span class="ashade-cursor-zoom ashade-cursor-label">Zoom</span>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/photoswipe.min.js') }}"></script>
<script src="{{ asset('js/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('js/masonry.min.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@section('ribbon')
@show
{{-- <script src="{{asset('js/ashade-ribbon.js')}}"></script> --}}

</body>

</html>
