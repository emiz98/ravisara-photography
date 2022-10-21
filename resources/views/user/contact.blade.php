@extends('user/app')

@section('metatags')
<meta name="description" content="Contact Us">
<meta name="keywords" content="wildlife, wildlife photography, photography">
@endsection

@section('content')

    <body class="has-spotlight ashade-smooth-scroll">

        {{ View::make('user/layouts/header') }}

        <!-- Content -->
        <div class="ashade-page-title-wrap">
            <h1 class="ashade-page-title">
                <span>If You Have More Questions</span>
                Get in Touch
            </h1>
        </div>

        <main class="ashade-content-wrap">
            <div class="ashade-content-scroll">
                <div class="ashade-content">
                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <p class="ashade-intro">If you have any questions, ideas or suggestions about photography or animals,
                                    you can use the options below. The easiest way is to contact me through social media.
                                    I am ready to help you at any time.Lets make something great together</p>
                            </div>
                        </div>
                    </section>
                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-4">
                                <div class="ashade-contact-details">
                                    <h4 class="ashade-contact-details__title">
                                        <span>My Contacts and Socials</span>
                                        How to Find Me
                                    </h4>
                                    <ul class="ashade-contact-details__list">
                                        <li>
                                            <i class="ashade-contact-icon la la-phone"></i>
                                            <a href="tel:0779415754">0779415754</a>
                                        </li>
                                        <li>
                                            <i class="ashade-contact-icon la la-envelope"></i>
                                            <?php $mail = env('DEFAULT_MAIL'); ?>
                                            <a href="mailto:{{$mail}}">{{$mail}}</a>
                                        </li>
                                        <li class="ashade-contact-socials">
                                            <i class="ashade-contact-icon la la-share-alt"></i>
                                            <a href="https://www.facebook.com/Dravisara.jayamanna" target="_blank"><i class="lab la-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/ravisara.jayamanna/" target="_blank"><i class="lab la-instagram"></i></a>
                                            <a href="https://www.youtube.com/channel/UCLyVMTBzqPEjLamAKnTeRlw" target="_blank"><i class="lab la-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div><!-- .ashade-contact-details -->
                            </div><!-- .ashade-col -->
                            <div class="ashade-col col-8">
                                <form action="{{route('support')}}" method="POST" class="">
                                    @csrf
                                    <div class="ashade-row ashade-small-gap">
                                        <div class="ashade-col col-4">
                                            <input type="text" id="name" name="name" placeholder="Your Name *" required>
                                        </div>
                                        <div class="ashade-col col-4">
                                            <input type="email" id="email" name="email" placeholder="Your Email *" required>
                                        </div>
                                        <div class="ashade-col col-4">
                                            <input type="tel" id="phone" name="phone" placeholder="Your Phone" >
                                        </div>
                                    </div>
                                    <textarea name="message" id="message" placeholder="Your Message *" required></textarea>
                                    <div class="ashade-contact-form__footer">
                                        <div class="ashade-contact-form__response"></div>
                                        <div class="ashade-contact-form__submit">
                                            <input type="submit" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div><!-- .ashade-col -->
                        </div><!-- .ashade-row -->
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
