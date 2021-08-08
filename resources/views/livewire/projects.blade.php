<div>
    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Our Projects</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Projects</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>

    <!-- services section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container py-md-5 py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2">Projects provided</h3>
                            <p class="lead">
                                {{ $projects_subtitle[0] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11">
                    <div class="row">
                        @if(count($projects))
                        @foreach($projects as $project)
                        <div class="col-lg-6">
                            <div class="services-single d-flex p-sm-5 p-4">
                                <div class="service-icon mr-sm-4 mr-3">
                                    <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                                </div>
                                <div class="services-content">
                                    <h5><a href="/project/{{ $project->slug }}">{{ $project->title }}</a></h5>
                                    <p>
                                        {{ $project->description }}
                                    </p>
                                    <a href="/project/{{ $project->slug }}" class="btn read-button d-flex align-items-center mt-4 p-0">Read
                                        More<i class="fa fa-angle-double-right ml-1" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services section -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
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
                                <a class="call-style-w3" href="tel:{{ $phone[0] }}">{{ $phone[0] }}</a>
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
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>

    @include('scripts')
</div>