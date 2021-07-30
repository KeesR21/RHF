    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-6 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">Location</h6>
                                    <li class="d-flex align-items-center py-2"><i class="fa fa-map-marker mr-2" aria-hidden="true"></i>{{ $location[0] }}</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">Working Hours</h6>
                                    <li><a href="#call-center">Monday- Friday</a></li>
                                    <li><a href="projects.html">8AM-4PM</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-contact-list mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <ul>

                            <li class="d-flex align-items-center py-2"><i class="fa fa-phone mr-2" aria-hidden="true"></i><a href="tel:{!! $phone !!}">
                                {!! $phone !!}
                            </a></li>
                            <li class="d-flex align-items-center py-2"><i class="fa fa-envelope mr-2" aria-hidden="true"></i><a href="mailto:info@rhf.rw">{!! $email[0] !!}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2021 Rwanda Healthcare Federation. All rights reserved</p>
                <div class="col-lg-4 text-right">
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //copyright -->

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>