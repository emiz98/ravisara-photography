@extends('user/app')

@section('metatags')
<meta name="description" content="About Us">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')

    <body class="has-spotlight ashade-smooth-scroll no-top-padding">

        {{ View::make('user/layouts/header') }}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>Who am I?</span>
                About Me
            </h1>
        </div>

        <main class="ashade-content-wrap">
            <div class="ashade-content-scroll">
                <div class="ashade-content">
                    <!-- About Section for Desktop Layout Only -->
                    <section class="ashade-section" style="margin-bottom: 50px">
                        <div class="ashade-row ashade-row-fullheight exclude-header">
                            <div class="ashade-col col-6">
                                <h2>
                                    <span>Few Words About Myself</span>
                                    Nice to Meet You
                                </h2>
                                <p>My name is Ravisara Jayamanna..I am 21 years old. I studied at Dharmapala Vidyalaya, Pannipitiya.
                                    I joined to the photography field in 2016. That was after joining the photography association of
                                    that school. Out of curiosity about animals and travelling, I turned to the wildlife photography side.
                                    My goal is to give some knowledge to the society by taking pictures of rare and elusive fauna which are
                                    important for the conservation of biodiversity in Sri Lanka. I usually visit mainly Yala, Wilpattu and
                                    rainforests like Sinharaja and Kitulgala.
                                    </p>
                                    <p>In addition to taking pictures, I also learn about animals
                                        and make documentary videos. I also do workshops and lectures on wildlife photography. You can watch
                                        our Wildlife Documentary Videos on the
                                        <a href="https://www.youtube.com/channel/UCLyVMTBzqPEjLamAKnTeRlw" target="_blank" style="color: rgb(192, 192, 192)">Wild Serendib</a> channel on Youtube.
                                        I also participate in wildlife photography competitions. You can see the winning competitions and
                                        trophies in the Awards category.
                                        Also you can decorate your work place or house with my pictures. You can find out more about it in the
                                        category, Prints. You can view my pictures via Instagram and Facebook.</p>
                                <div class="align-right ashade-signature-wrap">
                                    <img src="img/general/signature.png" alt="Signature" width="200" height="116">
                                </div>
                            </div>
                            <div class="ashade-col col-6 align-bottom hide-on-tablet-port hide-on-phone" style="justify-content: normal;">
                                <img src="img/general/about-me.png" alt="Andrew Shade" width="1240" height="1500">
                            </div>
                        </div><!-- .ashade-row -->
                    </section>

                    <section class="ashade-section">
                        <div class="ashade-row ashade-keep-on-tablet">
                            <div class="ashade-col col-3">
                                <div class="ashade-counter-item" data-delay="3000">
                                    <span class="ashade-counter-label">Awards Won</span>
                                    <span class="ashade-counter-value">25</span>
                                </div>
                            </div><!-- .ashade-col -->
                            <div class="ashade-col col-3">
                                <div class="ashade-counter-item" data-delay="3000">
                                    <span class="ashade-counter-label">Projects Done</span>
                                    <span class="ashade-counter-value">67</span>
                                </div>
                            </div><!-- .ashade-col -->
                            <div class="ashade-col col-3">
                                <div class="ashade-counter-item" data-delay="3000">
                                    <span class="ashade-counter-label">Happy Clients</span>
                                    <span class="ashade-counter-value">211</span>
                                </div>
                            </div><!-- .ashade-col -->
                            <div class="ashade-col col-3">
                                <div class="ashade-counter-item" data-delay="2000">
                                    <span class="ashade-counter-label">Greatest Shots</span>
                                    <span class="ashade-counter-value">5896</span>
                                </div>
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                    </section>

                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12 align-center">
                                <h3>
                                    <span>my achievements in life</span>
                                    Awards
                                </h3>
                                <p class="ashade-intro">I have been competing in photography competitions since my school days.
                                    Eversince I've been partipating in almost every category in various competitions which I emerged
                                     victorious.  After leaving school I competed at the national level and won several awards.
                                     I was selected as one of the top 5 photographers in an international competition. Im passionate
                                     to participate in more competitions in the future as well.</p>
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <div class="ashade-grid ashade-grid-4cols">
                                    <?php
                                        $dir = "img/awards/*.png";
                                        $images = glob( $dir );
                                    ?>
                                    @foreach ($images as $image)
                                        <div class="ashade-grid-item">
                                            <a href="{{$image}}" class="ashade-lightbox-link"
                                                data-size="1160x920">
                                                <img src="img/home/home3.png" data-src="img/home/home3.png"
                                                    class="lazy" alt="My Studio" width="1160" height="920">
                                            </a>
                                        </div>
                                    @endforeach
                                    {{-- <div class="ashade-grid-item">
                                        <a href="img/home/home3.png" class="ashade-lightbox-link"
                                            data-size="1160x920">
                                            <img src="img/home/home3.png" data-src="img/home/home3.png"
                                                class="lazy" alt="My Studio" width="1160" height="920">
                                        </a>
                                    </div> --}}
                                </div><!-- .ashade-grid -->
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                    </section>

                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12 align-center">
                                <h3>
                                    <span>Where magic is happening</span>
                                    Photo Processing
                                </h3>
                                <p class="ashade-intro">Here I like to show you photo processing. Sometimes you can not see
                                    result without direct comparsion. So I'll show you direct compare photo before and after
                                    processing, where I made retouching photo, removed background noise and improve color
                                    brightness.</p>
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <div class="ashade-before-after" data-img-before="img/general/before.png"
                                    data-img-after="img/general/after.png">
                                    <img src="img/general/before.png" alt="Photo Processing" width="1254" height="733">
                                </div><!-- .ashade-before-after -->
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                    </section>

                    {{-- <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12 align-center">
                                <h3>
                                    <span>What My Clients Say About Me</span>
                                    Testimonials
                                </h3>
                                <div class="ashade-row">
                                    <div class="ashade-col col-2"></div>
                                    <div class="ashade-col col-8">
                                        <div class="ashade-testimonials-carousel">
                                            <div class="ashade-tns-container" id="testimonials01">
                                                <div class="ashade-testimonials-item align-center swiper-slide">
                                                    <div class="ashade-testimonials-item__content">
                                                        <p>I'm not a professional model, but i like good photos, i like to
                                                            look pretty on my instagram channel and also i like to earn some
                                                            money on stock photos. Andrew helps me in all of this and much
                                                            more. Fantastic professional. Lot of thanks!</p>
                                                    </div><!-- .ashade-testimonials-item__content -->
                                                    <div class="ashade-testimonials-item__author">
                                                        <div class="ashade-testimonials-item__author--image">
                                                            <img src="img/avatars/testimonial01.jpg" alt="Elizabeth Shown">
                                                        </div>
                                                        <div class="ashade-testimonials-item__author--name">
                                                            <h6>
                                                                <span>Instagram Model</span>
                                                                Elizabeth Shown
                                                            </h6>
                                                        </div>
                                                    </div><!-- .ashade-testimonials-item__author -->
                                                </div><!-- .ashade-testimonials-item -->
                                                <div class="ashade-testimonials-item align-center swiper-slide">
                                                    <div class="ashade-testimonials-item__content">
                                                        <p>I am a web developer. And, as known, good clipart is a half of
                                                            successful web design. Today is not so easy to find realy good
                                                            photos for website. And one day I have ordered a clipart for my
                                                            new project and his works are fit just amazing!</p>
                                                    </div><!-- .ashade-testimonials-item__content -->
                                                    <div class="ashade-testimonials-item__author">
                                                        <div class="ashade-testimonials-item__author--image">
                                                            <img src="img/avatars/testimonial02.jpg" alt="Tony Norton">
                                                        </div>
                                                        <div class="ashade-testimonials-item__author--name">
                                                            <h6>
                                                                <span>Web Designer</span>
                                                                Tony Norton
                                                            </h6>
                                                        </div>
                                                    </div><!-- .ashade-testimonials-item__author -->
                                                </div><!-- .ashade-testimonials-item -->
                                                <div class="ashade-testimonials-item align-center swiper-slide">
                                                    <div class="ashade-testimonials-item__content">
                                                        <p>Andrew was our wedding photographer. He was help us to save our
                                                            brightest moment of life in fantastic photos! And it looks
                                                            brilliant. He managed to clearly convey all the emotions of the
                                                            event in his photos. Thank you, Andrew!</p>
                                                    </div><!-- .ashade-testimonials-item__content -->
                                                    <div class="ashade-testimonials-item__author">
                                                        <div class="ashade-testimonials-item__author--image">
                                                            <img src="img/avatars/testimonial03.jpg" alt="Traci Harden">
                                                        </div>
                                                        <div class="ashade-testimonials-item__author--name">
                                                            <h6>
                                                                <span>Happy Wife</span>
                                                                Traci Harden
                                                            </h6>
                                                        </div>
                                                    </div><!-- .ashade-testimonials-item__author -->
                                                </div><!-- .ashade-testimonials-item -->
                                                <div class="ashade-testimonials-item align-center swiper-slide">
                                                    <div class="ashade-testimonials-item__content">
                                                        <p>I am a beginner model. Since childhood I dreamed of becoming a
                                                            photo model. Andrew helped me make a gorgeous portfolio photo
                                                            and now I receive many offers from well-known agencies. I am
                                                            very grateful to Andrew for his work.</p>
                                                    </div><!-- .ashade-testimonials-item__content -->
                                                    <div class="ashade-testimonials-item__author">
                                                        <div class="ashade-testimonials-item__author--image">
                                                            <img src="img/avatars/testimonial04.jpg" alt="Nelle Niles">
                                                        </div>
                                                        <div class="ashade-testimonials-item__author--name">
                                                            <h6>
                                                                <span>Beginner Model</span>
                                                                Nelle Niles
                                                            </h6>
                                                        </div>
                                                    </div><!-- .ashade-testimonials-item__author -->
                                                </div><!-- .ashade-testimonials-item -->
                                                <div class="ashade-testimonials-item align-center swiper-slide">
                                                    <div class="ashade-testimonials-item__content">
                                                        <p>Andrew work for our agency When I only became to be a model. He
                                                            is my first experience and my first professional photographer.
                                                            That was a long time ago and now I sometimes appeal to Andrew
                                                            for private photo shoots.</p>
                                                    </div><!-- .ashade-testimonials-item__content -->
                                                    <div class="ashade-testimonials-item__author">
                                                        <div class="ashade-testimonials-item__author--image">
                                                            <img src="img/avatars/testimonial05.jpg" alt="Betty Janson">
                                                        </div>
                                                        <div class="ashade-testimonials-item__author--name">
                                                            <h6>
                                                                <span>Agency Manager</span>
                                                                Betty Janson
                                                            </h6>
                                                        </div>
                                                    </div><!-- .ashade-testimonials-item__author -->
                                                </div><!-- .ashade-testimonials-item -->
                                            </div><!-- .ashade-tns-container -->
                                            <div class="ashade-testimonials-nav"></div>
                                        </div><!-- .ashade-testimonials-carousel -->
                                    </div><!-- .ashade-col -->
                                    <div class="ashade-col col-2"></div>
                                </div><!-- .ashade-row -->
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
                    </section> --}}

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
