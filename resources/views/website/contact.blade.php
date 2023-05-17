@include('website.inc.header')
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('website/images/backgrounds/page-header-bg.jpg')}})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact Us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="contact-page-bg" style="background-image: url({{ asset('website/images/backgrounds/contact-page-bg.jpg')}});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Contact now</span>
                                <h2 class="section-title__title">We out The Form Prepared at <br> Your Contact?</h2>
                            </div>
                            <div class="contact-page__form">
                                <form action="{{ route('messages.store') }}" class="comment-one__form contact-form-validated"
                                 method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                      
                                        <div class="col-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a comment"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__right">
                            <div class="contact-page__img">
                                <img src="{{ asset('website/images/resources/contact-page-img-1.jpg')}}" alt="">
                                <div class="contact-page__img-shape">
                                    <img src="{{ asset('website/images/shapes/contact-page-img-shape.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Info Start-->
        <section class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Contact Info Single-->
                        <div class="contact-info__single">
                            <h4 class="contact-info__title">About</h4>
                            <p class="contact-info__text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                adipiscing ullam bla.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Contact Info Single-->
                        <div class="contact-info__single">
                            <h4 class="contact-info__title">Address</h4>
                            <p class="contact-info__text">88 Broklyn Golden Road Street. New York, United States of
                                America</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Contact Info Single-->
                        <div class="contact-info__single contact-info__single-3">
                            <h4 class="contact-info__title">Contact</h4>
                            <p class="contact-info__email-phone">
                                <a href="mailto:needhelp@company.com"
                                    class="contact-info__email">needhelp@company.com</a>
                                <a href="tel:13077760608" class="contact-info__phone">+1 (307) 776-0608</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Info End-->
@include('website.inc.footer')