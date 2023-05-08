@include('website.inc.header')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('website/images/backgrounds/page-header-bg.jpg')}})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Blog details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Blog details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ $post->file? asset('storage/'.$post->file):'website/images/blog/blog-1-1.jpg'  }}" alt="">
                                <div class="blog-details__date">
                                    <p>{{  $carbon::parse($post->created_at)->format('d M Y') }}</p>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                
                                <h3 class="blog-details__title">{{ $post->title }}</h3>
                                <p class="blog-details__text-1">{{$post->body}}</p>
                               
                            </div>
                            
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--Blog Details End-->
    
@include('website.inc.footer')