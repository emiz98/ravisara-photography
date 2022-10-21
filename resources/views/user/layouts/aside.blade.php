<!-- Aside Bar -->
<aside id="ashade-aside">
    <a href="#" class="ashade-aside-close">Close Sidebar</a>
 <div class="ashade-aside-inner">
     <div class="ashade-aside-content">
         <div class="ashade-widget ashade-widget--about">
             <div class="ashade-widget--about__head">
                 <img src="{{asset('img/general/aside.png')}}" alt="Andrew Shade">
                 <h5>
                     <span>Photographer</span>
                     Ravisara Jayamanna
                 </h5>
             </div>
             <p>My name is Ravisara Jayamanna..I am 21 years old. I studied at Dharmapala Vidyalaya, Pannipitiya.
                I joined to the photography field in 2016. That was after joining the photography association of
                that school. Out of curiosity about animals and travelling, I turned to the wildlife photography side.</p>
             <p class="align-right">
                 <a href="{{route('about')}}" class="ashade-learn-more">Learn More</a>
             </p>
         </div><!-- .ashade-widget -->

         <div class="ashade-widget ashade-widget--contacts">
             <h5 class="ashade-widget-title">
                 <span>My contacts and socials</span>
                 How to find me
             </h5>
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
                     <a href="https://www.instagram.com/ravisara.jayamanna/" target="_blank"><i class="lab la-instagram"></i></a></a>
                     <a href="https://www.youtube.com/channel/UCLyVMTBzqPEjLamAKnTeRlw" target="_blank"><i class="lab la-youtube"></i></a>
                 </li>
             </ul>
             <p class="align-right">
                 <a href="{{route('contact')}}" class="ashade-learn-more">Get in touch</a>
             </p>
         </div><!-- .ashade-widget -->

     </div><!-- .ashade-aside-content -->
 </div><!-- .ashade-aside-inner -->
</aside>
