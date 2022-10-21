@extends('user/app')

@section('content')
<body class="has-spotlight ashade-smooth-scroll is-centered ashade-maintenance-wrap">
    {{ View::make('user/layouts/header') }}
    <!-- Content -->
	<div class="ashade-maintenance-background ashade-page-background" data-src="img/bgs/maintenance.jpg"></div>
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Page that you are looking</span>
            Not Found
        </h1>
    </div>

    <main class="ashade-content-wrap">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="ashade-section">
                    <div class="ashade-row ashade-row-middle">
                        <div class="ashade-col col-8" style="text-align: center; font-size:100px;">
                            404
                        </div><!-- .ashade-col -->
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
                                        <a href="mailto:{{ $mail }}">{{ $mail }}</a>
                                    </li>
                                    <li class="ashade-contact-socials">
                                        <i class="ashade-contact-icon la la-share-alt"></i>
                                        <a href="https://www.facebook.com/Dravisara.jayamanna" target="_blank"><i
                                                class="lab la-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/ravisara.jayamanna/" target="_blank"><i
                                                class="lab la-instagram"></i></a>
                                        <a href="https://www.youtube.com/channel/UCLyVMTBzqPEjLamAKnTeRlw"
                                            target="_blank"><i class="lab la-youtube"></i></a>

                                    </li>
                                </ul>
                            </div><!-- .ashade-contact-details -->
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
				</section>
			</div><!-- .ashade-content -->

			{{View::make('user/layouts/copyrightfooter')}}
		</div><!-- .ashade-content-scroll -->
	</main>

    <div id="ashade-contacts-wrap">
    	<a href="#" class="ashade-contacts-close"></a>
    	<div class="ashade-content">
    		<div class="ashade-row">
    			<div class="ashade-col col-2">
    				<!-- Spacer -->
    			</div>
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
    			</div>
    			<div class="ashade-col col-2">
    				<!-- Spacer -->
    			</div>
    		</div>
    	</div>
    </div><!-- #ashade-contacts-wrap -->

    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-message">
            <span>Write Me Some</span>
            <span>Message</span>
        </div>
        <div class="ashade-back is-message-close">
            <span>Close And</span>
            <span>Return</span>
        </div>
    </div>
@endsection
