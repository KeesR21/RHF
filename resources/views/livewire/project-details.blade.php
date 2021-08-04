<div class="w3l-blog-single py-5">
    <!-- blog single -->
    <!-- <section class="w3l-blog-single py-5"> -->
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-3 left-blog-single pr-lg-4">
                    <div class="p-sticky-blog">
                        @if($prev_project)
                        <aside class="mr-md-0 mr-3">
                            <!-- <a href="blog-single.html"><img src="assets/images/s3.jpg" class="img-fluid" alt="" /></a> -->
                            <h6 class="text-left-inner-9"><a href="{{ URL::to('/project/'. $prev_project->slug) }}">{{ $prev_project->slug }}</a></h6>
                            <span class="sub-inner-text-9"> {{ $prev_project->created_at->diffForHumans() }}</span>
                            <hr>
                        </aside>
                        
                        @endif
                        @if($next_project)
                        <aside>
                            <!-- <a href="blog-single.html"><img src="assets/images/s2.jpg" class="img-fluid" alt="" /></a> -->
                            <h6 class="text-left-inner-9"><a href="{{ URL::to('/project/'. $next_project->slug) }}">{{ $next_project->title }}</a>
                            </h6>
                            <span class="sub-inner-text-9">{{ $next_project->created_at->diffForHumans() }}</span>
                            <hr>
                        </aside>
                        @endif
                    </div>
                </div>
                <div class="col-md-9 right-blog-single pl-lg-5 mb-md-0 mb-5">
                    <h4 class="text-head-text-9"><a href="#text">{{ $project->title }}</a></h4>
                    <img src="assets/images/bg1.jpg" class="img-fluid" alt="" />
                    <p class="sub-para">
                        {{ $project->description }}
                    </p>
                    <!-- <h5 class="sub-head-text-9">Vehicula dui nec, convallis sem. Phasellus auctor, lacus ac
                        vulputate vestibulum, tellus leo rutrum leo, vel sem quam nec arcu.
                        vitae semper lobortis. Nullam sit amet cursus mi.</h5> -->
                    <p class="sub-para">
                        {!! $project->body !!}
                    </p>
                    <h5 class="sub-head-text-9">
                        Published: {{ $project->created_at->diffForHumans() }}
                    </h5>
                </div>
            </div>
        </div>
    <!-- </section> -->
</div>
@include('main-footer')