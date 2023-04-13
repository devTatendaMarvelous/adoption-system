@include('website.inc.header')


        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(website/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Blog post</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Blog V-2</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-page-v-2">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Blog</span>
                    <h2 class="section-title__title">Latest News & Update.</h2>
                </div>
                <div class="row">@forelse ($posts as $post )
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One single-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">

                                <img src="{{ $post->file? asset('storage/'.$post->file):'website/images/blog/blog-1-1.jpg'  }}" alt="">
                                {{-- <a href="/blog/{{ $post->id }}">
                                    <span class="blog-one__plus"></span>
                                </a> --}}
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    {{-- <div class="blog-one__cat">
                                        <p>Cyclone</p>
                                    </div> --}}
                                    <div class="blgo-one__date">
                                        <p> <span class="icon-calendar"></span> {{  $carbon::parse($post->created_at)->format('d M Y') }}</p>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="/blog/{{ $post->id }}">{{ $post->title}} </a></h3>
                                <p class="blog-one__text col-5">{{ $post->body }}</p>
                            </div>
                        </div>
                    </div>
                    
                @empty
                    
                @endforelse



                
                </div>
                {{-- <div class="row">
                    <div class="col-xl-12">
                        <div class="blog-page__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <li class="count"><a href="#">1</a></li>
                                <li class="count"><a href="#">2</a></li>
                                <li class="count"><a href="#">3</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!--Blog Page End-->

    
@include('website.inc.footer')