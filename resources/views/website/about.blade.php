@include('website.inc.header')
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('website/images/backgrounds/page-header-bg.jpg')}})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About One Start-->
        <section class="about-one about-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('website/images/resources/about-one-img-1.jpg')}}" alt="">
                                </div>
                                <div class="about-one__small-img wow zoomIn animated animated" data-wow-delay="500ms"
                                    data-wow-duration="2500ms">
                                    <img src="{{ asset('website/images/resources/about-one-small-img.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__right-content">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">About Us</span>
                                    <h2 class="section-title__title">We Can Save More Lifes With Your Helping Hand.</h2>
                                </div>
                                <p class="about-one__text">Lorem ipsum is simply free text dolor sit amet,
                                    consecteturadipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua lonm andhn.</p>
                                <ul class="list-unstyled about-one__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="text">
                                            <h4>It service for business network.</h4>
                                            <p>ill give you a complete account of the system, and
                                                expound the actual teachings...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="text">
                                            <h4>Business success rate solving.</h4>
                                            <p>ill give you a complete account of the system, and
                                                expound the actual teachings...</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="about-one__bottom-video-box">
                                    <div class="about-one__btn-box">
                                        <a href="about.html" class="thm-btn about-one__btn">About More</a>
                                    </div>
                                    <div class="about-one__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="about-one__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('website/images/backgrounds/counter-one-bg.jpg')}});"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Counter Now</span>
                    <h2 class="section-title__title">We Popular To Provide <br> Years Experience.</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <!--Counter One Single-->
                        <div class="counter-one__single">
                            <div class="counter-one__content">
                                <h3 class="odometer" data-count="725">00</h3>
                                <span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Start Donating</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <!--Counter One Single-->
                        <div class="counter-one__single">
                            <div class="counter-one__content">
                                <h3 class="odometer" data-count="965">00</h3>
                                <span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Become Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                        <!--Counter One Single-->
                        <div class="counter-one__single">
                            <div class="counter-one__content">
                                <h3 class="odometer" data-count="85">00</h3>
                                <span class="counter-one__letter">K+</span>
                                <p class="counter-one__text">Quick Fundraise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                        <!--Counter One Single-->
                        <div class="counter-one__single">
                            <div class="counter-one__content">
                                <h3 class="odometer" data-count="1954">00</h3>
                                <span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Pioneer throughs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__btn-box text-center">
                            <a href="about.html" class="thm-btn counter-one__btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Project One Start-->
        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Causes Events</span>
                    <h2 class="section-title__title">We Popular To Provide <br> Best Projects.</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{ asset('website/images/project/project-1-1.jpg')}}" alt="">
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Our Best Projects</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Event of Shares</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{ asset('website/images/project/project-1-2.jpg')}}" alt="">
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Our Best Projects</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Provides them Poor</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{ asset('website/images/project/project-1-3.jpg')}}" alt="">
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Our Best Projects</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Children of Poor</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{ asset('website/images/project/project-1-4.jpg')}}" alt="">
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Our Best Projects</p>
                                    <h3 class="project-one__title"><a href="project-details.html">History Of Tibet</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single-->
                        <div class="project-one__single"php artisan serve
                        >
                            <div class="project-one__img">
                                <img src="{{ asset('website/images/project/project-1-5.jpg')}}" alt="">
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Our Best Projects</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Drought
                                            Information</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Skill One Start-->
        <section class="skill-one">
            <div class="skill-one__container">
                <div class="skill-one__left">
                    <div class="skill-one__bg"
                        style="background-image: url({{ asset('website/images/backgrounds/skill-one-left-bg.jpg')}});"></div>
                    <div class="skill-one__arrow-box">
                        <div class="skill-one__arrow-box-inner"></div>
                    </div>
                </div>
                <div class="skill-one__right">
                    <div class="skill-one__bg-two"
                        style="background-image: url({{ asset('website/images/backgrounds/skill-one-right-bg.jpg')}});"></div>
                    <div class="skill-one__content">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Skill Now</span>
                            <h2 class="section-title__title">We Are To Provide Years Of Skill Now.</h2>
                        </div>
                        <p class="skill-one__text">Lorem ipsum is simply free text dolor sit amet, consectetur
                            adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm
                            andhn.</p>
                        <div class="progress-levels">
                            <!--Skill Box-->
                            <div class="progress-box">
                                <div class="inner count-box">
                                    <div class="text">Donating</div>
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000" data-stop="90">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                            <div class="bar-fill" data-percent="90"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Skill Box-->
                            <div class="progress-box">
                                <div class="inner count-box">
                                    <div class="text">Fundraise</div>
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000" data-stop="82">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                            <div class="bar-fill" data-percent="82"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Skill Box-->
                            <div class="progress-box last-child">
                                <div class="inner count-box">
                                    <div class="text">Consultancy</div>
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000" data-stop="88">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                            <div class="bar-fill" data-percent="88"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="thm-btn skill-one__btn">Skill More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Skill One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Expert Team</span>
                    <h2 class="section-title__title">Meet Our Volunteer Team.</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <!--Team One Single-->
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('website/images/team/team-1-1.jpg')}}" alt="">
                            </div>
                            <div class="team-one__content">
                                <h4 class="team-one__name"><a href="team-details.html">Kavin Martin</a></h4>
                                <p class="team-one__title">Ceo</p>
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Team One Single-->
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('website/images/team/team-1-2.jpg')}}" alt="">
                            </div>
                            <div class="team-one__content">
                                <h4 class="team-one__name"><a href="team-details.html">David Malan</a></h4>
                                <p class="team-one__title">Volunteer</p>
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms">
                        <!--Team One Single-->
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('website/images/team/team-1-3.jpg')}}" alt="">
                            </div>
                            <div class="team-one__content">
                                <h4 class="team-one__name"><a href="team-details.html">David Hardson</a></h4>
                                <p class="team-one__title">Team Leader</p>
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--video One Start-->
        <section class="video-one">
            <div class="video-one__content-box">
                <div class="video-one-shape sauare-mover"></div>
                <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{ asset('website/images/backgrounds/video-one-bg.jpg')}});"></div>
                <div class="container">
                    <div class="video-one__inner">
                        <div class="video-one__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <h3 class="video-one__title">Welcome To Our We Donation <br> Video Poor.</h3>
                        <p class="video-one__text">If you are going to use a passage of Lorem Ipsum, you <br> need to be
                            sure there isn't anything </p>
                        <a href="about.html" class="thm-btn video-one__btn">Video More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--video One End-->

        <!--Testimonial One End-->
        <section class="testimonial-one">
            <div class="container">
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "991": {
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    <!--Testimonial One single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__img">
                            <img src="{{ asset('website/images/testimonial/testimonial-1-1.jpg')}}" alt="">
                            <div class="testimonial-one__quote">
                                <span class="fas fa-quote-left"></span>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor
                            incididunt ut labore et dolore aliqua.</p>
                        <div class="testimonial-one__client-info">
                            <h4 class="testimonial-one__client-name">Karom Boros</h4>
                            <span class="testimonial-one__client-title">Founder</span>
                        </div>
                    </div>

                    <!--Testimonial One single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__img">
                            <img src="{{ asset('website/images/testimonial/testimonial-1-2.jpg')}}" alt="">
                            <div class="testimonial-one__quote">
                                <span class="fas fa-quote-left"></span>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor
                            incididunt ut labore et dolore aliqua.</p>
                        <div class="testimonial-one__client-info">
                            <h4 class="testimonial-one__client-name">Sumi Parvin</h4>
                            <span class="testimonial-one__client-title">Volunteer</span>
                        </div>
                    </div>

                    <!--Testimonial One single-->
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__img">
                            <img src="{{ asset('website/images/testimonial/testimonial-1-3.jpg')}}" alt="">
                            <div class="testimonial-one__quote">
                                <span class="fas fa-quote-left"></span>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor
                            incididunt ut labore et dolore aliqua.</p>
                        <div class="testimonial-one__client-info">
                            <h4 class="testimonial-one__client-name">Robi islam</h4>
                            <span class="testimonial-one__client-title">Manager</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Testimonial End End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Blog</span>
                    <h2 class="section-title__title">Latest News & Update.</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One single-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('website/images/blog/blog-1-1.jpg')}}" alt="">
                                <a href="blog-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__cat">
                                        <p>Cyclone</p>
                                    </div>
                                    <div class="blgo-one__date">
                                        <p> <span class="icon-calendar"></span> Nov 09 2022</p>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">will provide an ats resume
                                        writing and Blog. </a></h3>
                                <p class="blog-one__text">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore aliqu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Blog One single-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('website/images/blog/blog-1-2.jpg')}}" alt="">
                                <a href="blog-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__cat">
                                        <p>Homeless</p>
                                    </div>
                                    <div class="blgo-one__date">
                                        <p> <span class="icon-calendar"></span> Nov 09 2022</p>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Leverage agile frameworks to
                                        provide</a></h3>
                                <p class="blog-one__text">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore aliqu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Blog One single-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('website/images/blog/blog-1-3.jpg')}}" alt="">
                                <a href="blog-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__cat">
                                        <p>Donate</p>
                                    </div>
                                    <div class="blgo-one__date">
                                        <p> <span class="icon-calendar"></span> Nov 09 2022</p>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Bring to the table win-win
                                        survival</a></h3>
                                <p class="blog-one__text">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore aliqu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog One End-->
@include('website.inc.footer')