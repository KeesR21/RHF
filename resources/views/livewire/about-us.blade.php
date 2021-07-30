<div>
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ '/' }}">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>

    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!-- about-2 section -->
    <section class="w3l-about-2 pb-5">
        <div class="container pb-md-5 pb-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 about-2-secs-left pr-lg-5">
                    <h3 class="title-style mb-sm-3 mb-2">Few Words About Us!</h3>
                    <p>The Rwanda Healthcare Federation (RHF) is the premier private health sector body in Rwanda with an ultimate goal of advocating for the interests of the private health sector and promoting access to affordable, equitable and quality health services. The RHF brings together non-state actors in the healthcare space including but not limited to health professionals’ associations, Non-Government Organizations (NGOs) and Faith Based Organizations (FBOs).
                    </p>


                    <div class="mt-4">
                        <a class="btn btn-style-white btn-style-primary" href="projects.html">View Our Projects</a>
                    </div>
                </div>
                <div class="col-lg-6 about-2-secs-right mt-lg-0 mt-5">
                    <img src="{{ asset('images/about2.jpg') }}" alt="" class="img-fluid img-responsive" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!-- team section -->
    <section class="w3l-team py-5">
        <div class="container py-md-5 py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">Meet our Board members</h3>
                        <p class="lead">
                            A strategic board has a view of looking ahead, an insight to look deeper, and competency to look beyond.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @if(count($members))
                @foreach($members as $member)
                <div class="col-md-4 mt-md-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="{{ asset('images/uploads/'. $member->photo) }}" class="img-fluid" alt="">

                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="#team">{{ $member->names }}</a></h5>
                            <small>{{ $member->position }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- //team setion -->
    @include('main-footer')

    @include('scripts')

</div>