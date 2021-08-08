<div>

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">{{ $post->title }}</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{ $post->title }}</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

    </div>
    <!-- blog single -->
    <section class="w3l-blog-single py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-3 left-blog-single pr-lg-4">
                    <div class="p-sticky-blog">
                        @if($prev_post)
                        <aside class="mr-md-0 mr-3">
                            <a href="{{ URL::to('/post/'. $prev_post->slug) }}"><img src="{{ asset('images/uploads/'. $prev_post->image) }}" class="img-fluid" alt="" /></a>
                            <h6 class="text-left-inner-9">
                                <a href="{{ URL::to('/post/'. $prev_post->slug) }}">
                                    {{ $prev_post->title }}
                                </a>
                            </h6>
                            <span class="sub-inner-text-9">{{ $prev_post->created_at->diffForHumans() }}</span>
                            <hr>
                        </aside>
                        @endif
                        @if($next_post)
                        <aside>
                            <a href="{{ URL::to('/post/'. $next_post->slug) }}"><img src="{{ asset('images/uploads/'. $next_post->image) }}" class="img-fluid" alt="" /></a>
                            <h6 class="text-left-inner-9">
                                <a href="{{ URL::to('/post/'. $next_post->slug) }}">
                                    {{ $next_post->title }}
                                </a>
                            </h6>
                            <span class="sub-inner-text-9">{{ $next_post->created_at->diffForHumans() }}</span>
                            <hr>
                        </aside>
                        @endif
                    </div>
                </div>
                <div class="col-md-9 right-blog-single pl-lg-5 mb-md-0 mb-5">
                    <img src="{{ asset('images/uploads/'. $post->image) }}" class="img-fluid" alt="" />

                    <h5 class="sub-head-text-9">
                        {{ $post->description }}
                    </h5>
                    <p class="sub-para">
                        {!! $post->content !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog single -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
</div>
@include('main-footer')
@include('scripts')