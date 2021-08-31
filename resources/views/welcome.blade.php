<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- google-fonts -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-liberty.css') }}">



</head>
<meta name="robots" content="noindex">

<body>
    <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
    <!-- New toolbar-->

    @include('main-navigation')

    <!-- banner section -->
    <section class="w3l-banner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h3 class="text-white mb-3 title">{{ config('app.name') }}</h3>
                    <p class="lead text-white">Welcome!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <!-- about -->
    <section class="w3l-features-photo-7 py-5">
        <div class="container py-md-5 py-4">
            <div class="row w3l-features-photo-7_top">
                <div class="col-lg-6 w3l-features-photo-7_top-left pr-lg-5">
                    <h4 class="title-style mb-2">Welcome message</h4>
                    <p>
                        {!! $welcome ?? ''[0] !!}
                        
                        <br>
                        <b>Dr. Jean Chrysostome Nyirinkwaya</b><br>
                        <b>Chairman</b>

                    </p>
                </div>
                <div class="col-lg-6 w3l-features-photo-7_top-right mt-lg-0 mt-sm-5 mt-4">
                    <img src="{{ asset('images/maxresdefault.jpg') }}" class="img-responsive" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>

    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!-- stats -->



    <!-- blog section -->
    <div class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">Our Latest News</h3>
                        <p class="lead">
                            {{ $posts_subtitle[0] ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(count($posts))
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-sm-6">
                            <div class="blog-card-single">
                                <div class="grids5-info">
                                    <a href="/post/{{ $post->slug }}"><img src="{{ asset('images/uploads/'. $post->image) }}" alt="" /></a>
                                    <div class="blog-info">
                                        <h5>{{ $post->created_at->diffForHumans() }} <a href="blog-single-2.html">New</a></h5>
                                        <h4><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h4>
                                        <p>
                                            {{ $post->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
    <!-- //blog section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-5 col-float-lt">
                        <h3 class="title-big">Contact us now!</h3>
                        <p>For Online queries, please call us today</p>
                    </div>
                    <div class="col-md-7 float-rt text-md-right align-items-center mt-md-0 mt-4">
                        <ul class="buttons">
                            <li class="phone-sec"><span class="fa fa-volume-control-phone mr-1" aria-hidden="true"></span>
                                <a class="call-style-w3" href="tel:+(250) 788 898 262">{!! $phone[0] !!}</a>
                            </li>
                            <li class="green">Or</li>
                            <li><a href="/contact-us" class="btn btn-style-white btn-style-primary">Get in touch</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

    @include('main-footer')

    @include('scripts')
    
</body>

</html>