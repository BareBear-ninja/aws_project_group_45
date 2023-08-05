@php use Illuminate\Support\Facades\Session; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>MamaZap - Cleaning Landing Page Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.html">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="css/ilmosys-icons.css">
    <link rel="stylesheet" href="css/icons/fontawesome/css/style.css">
    <link rel="stylesheet" href="css/icons/style.css">
    <link rel="stylesheet" href="css/icons/icon2/style.css">
    <link rel="stylesheet" href="js/vendors/swipebox/css/swipebox.min.css">


    <!-- THEME / PLUGIN CSS -->
    <link rel="stylesheet" href="js/vendors/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

<div class="body">
    <!-- HEADER -->
    <header>
        <nav class="navbar-inverse navbar-lg navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand brand"><img src="images/logo1.png" alt="logo"></a>

                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right navbar-login">
                        <li>
                            <a href="tel:1800789123"> <i class="fa fa-phone"></i> 1800 723 456</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#home">Home</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#reviews">Reviews</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#service">Services</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#faq">FAQ</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- INTRO -->
    <div id="home" class="intro intro1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row center-content">
                <div class="col-sm-5 col-md-4">
                    <div class="intro-form">
                        <h4>Bukit jalil #1 Rated House Cleaners.</h4>
                        <form action="/create" method="post">
                            @csrf
                            <input name="form-type" value="contact" type="hidden">
                            <fieldset>
                                <input placeholder="Your Name" name="name" required type="text"
                                       value="{{Session::get('name')}}">
                                <input placeholder="Email" name="email" required type="email"
                                       value="{{Session::get('email')}}">
                                <input placeholder="Password" name="password" required type="password">
                                <button class="btn btn-block btn-lg btn-primary" type="submit">Register</button>
                            </fieldset>
                        </form>
                        Already have an account? <a href="/login">Login</a>
                    </div>
                </div>
                <div class="col-sm-7 col-md-push-1">
                    <h2>Book your professional <br> home cleaner in sec.</h2>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="intro-box">
                                <span class="icon-calendar"></span>
                                <div>
                                    <h4>1. Book a Cleaning</h4>
                                    <p>See our service and book</p>
                                </div>
                            </div>
                            <div class="intro-box">
                                <span class="icon-lock"></span>
                                <div>
                                    <h4>2. Confirm Booking </h4>
                                    <p>Choose our service</p>
                                </div>
                            </div>
                            <div class="intro-box">
                                <span class="icon-home"></span>
                                <div>
                                    <h4>3. We’ll Clean it</h4>
                                    <p>Our cleaner will on the way !!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ELEMENTS-CLIENTS -->
    <div class="elements-content bg-primary">
        <div class="container">
            <div class="row">
                <ul class="clients no-padding text-center">
                    <li><img src="images/clients/1.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/2.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/3.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/4.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/5.png" class="img-responsive center-block" alt=""/></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->
    <div id="reviews" class="testimonials-white">

        <div class="container">
            <div class="about-inline text-center">
                <p>- REVIEWS -</p>
                <h3>Read what our past customers said <br> about our cleaning and services. </h3>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="quote3">
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Excellent service. The team was punctual and thorough. My home feels refreshed.
                                 Best cleaning experience to date. Highly recommended."</p>
                            <span class="author">- Alex goa -</span> <br/>
                            <span class="author-job">Web Designer @goa</span>
                        </div>
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Top-notch cleaning! They pay attention to details, leaving no corner untouched. Friendly staff. 
                                Will definitely book again. A+ service."</p>
                            <span class="author">- Dave balikpapan -</span> <br/>
                            <span class="author-job">Product Designer @kaka</span>
                        </div>
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Truly professional. My apartment shines like new. Impressed by their dedication and efficiency. 
                                Trustworthy and worth every penny."</p>
                            <span class="author">- Jack Doe -</span> <br/>
                            <span class="author-job">Front End Designer @kaka</span>
                        </div>
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Exceeded expectations! The cleanliness and organization level is unmatched. Courteous staff.
                                 I'm now a loyal customer. Five stars."</p>
                            <span class="author">- Willsam Doe -</span> <br/>
                            <span class="author-job">Back End Developer @kaka</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->

    <!-- PARALLAX -->
    <section class="parallax-content parallax1 text-center" data-stellar-background-ratio="0.4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 style="text-align: center;">Over 200+ companies are already using MamaZap.</h4>

                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <div id="service" class="container">
        <div class="about-inline text-center">
            <div class="container">
                <p>- WHAT WE DO -</p>
                <h3>Check out some of our professional<br> services! </h3>
            </div>
        </div>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-4">
                        <h3>The Awesome Bedroom</h3>
                        <ul class="list">
                            <li><i class="icon-check"></i> Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i> Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="images/services/1.jpg" class="pull-right img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>

        <br> <br><br>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-8 text-center">
                        <img src="images/services/2.jpg" class="pull-right img-responsive" alt="">
                    </div>
                    <div class="col-md-4">
                        <h3>Make a Kitchen Beautiful.</h3>
                        <ul class="list">
                            <li><i class="icon-check"></i> Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i> Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <br> <br><br>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-4">
                        <h3>Make a Room Comfortable. </h3>
                        <ul class="list">
                            <li><i class="icon-check"></i> Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i> Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="images/services/3.jpg" class="pull-right img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>

        <br> <br><br>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-8 text-center">
                        <img src="images/services/4.jpg" class="pull-right img-responsive" alt="">
                    </div>
                    <div class="col-md-4">
                        <h3>The Tiptop Bathroom </h3>
                        <ul class="list">
                            <li><i class="icon-check"></i>Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i>Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i>Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i>Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="space100"></div>


    <!-- SERVICES -->
    <div class=" bg-light">
        <div class="container">
            <div class="about-inline text-center">
                <div class="container">
                    <p>- reason -</p>
                    <h3>Reasons to love MamaZap. </h3>
                    <p>We're different from your typical home cleaning company. We're out to create magic. The goal is
                        to WOW you with outstanding treatment.</p>
                </div>
            </div>

            <div class="service3 icon-box-square">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <span><i class="fa fa-1x fa-magic"></i></span>
                                <div class="services-content">
                                    <h2>Trusted & Vetted Cleaners</h2>
                                    <p>At MamaZap you'll only find the best. All our cleaners are carefully vetted by
                                        us - cleaners we'd be happy to have clean our own homes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <span><i class="fa fa-1x fa-codepen"></i></span>
                                <div class="services-content">
                                    <h2>Customer Recommended</h2>
                                    <p>MamaZap cleaners are continuously reviewed by our customers. Each and every
                                        cleaner is to maintain a high standard to clean with us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <span><i class="fa fa-1x fa-delicious"></i></span>
                                <div class="services-content">
                                    <h2>Commitment to Trust & Safety</h2>
                                    <p>Your home is your sanctuary. At Clenaa we go above and beyond to create a more
                                        trusted and reliable experience. Peoples love our services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- INFO CONTENT -->
<div class="info-content2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Honesty is the best policy.</h3>
                <div class="space10"></div>
                <p>We communicate honestly. No hidden fees, no surprises, no upsells! Only honest work and trustworthy
                    staff.</p>

            </div>
        </div>
    </div>
</div>


<!-- Intro 1 -->
<div class="intro intro-benifits2">
    <div class="container">
        <div class="row center-content">
            <div class="col-md-5">
                <h3>We're Bukit Jalil  most trusted house cleaning service!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in
                    sit amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove. Lorem ipsum dolor sit amet consectetur adipiscing elit. Etiam et purus a odio
                    finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                <a href="#home" class="btn btn-lg btn-primary space20 page-scroll">Book a Cleaning</a>
            </div>

            <div class="col-md-7">
                <img src="images/bg/benifits2.jpg" class="pull-left img-responsive" alt=""/>
            </div>
        </div>
    </div>
</div>

<!-- Intro 2 -->
<div class="intro intro-benifits2">
    <div class="container">
        <div class="row center-content">
            <div class="col-md-7">
                <img src="images/bg/benifits1.jpg" class="pull-left img-responsive" alt=""/>
            </div>
            <div class="col-md-5">
                <h3>Why choose MamaZap to clean your home?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in
                    sit amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove. Lorem ipsum dolor sit amet consectetur adipiscing elit. Etiam et purus a odio
                    finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                <a href="#home" class="btn btn-lg btn-primary space20 page-scroll">Book a Cleaning</a>
            </div>
        </div>
    </div>
</div>


<!-- FREQUENTLY ASKED QUESTIONS -->
<div class="container" id="faq">
    <div class="about-inline text-center">
        <p>- FREQUENTLY ASKED QUESTIONS -</p>
        <h3>Got questions? We’ve got answers. send us <br> email to hello@MamaZap.com </h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> What services does MamaZap offer?</h4>
                <p> MamaZap specializes in delivering top-notch cleaning solutions for homes and offices, utilizing eco-friendly products and trained professionals to ensure your space is both spotless and healthy.</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> Is MamaZap eco-friendly and safe for kids?</h4>
                <p>Absolutely! MamaZap emphasizes using environmentally friendly products. All our cleaning agents are non-toxic, ensuring the safety of your kids, pets, and the entire family.</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> How do I schedule a cleaning session?</h4>
                <p>Booking is simple. Visit our website, choose your preferred service and time slot, and we'll handle the rest. Our team is committed to meeting your specific needs.</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> Are the MamaZap cleaning professionals trained and insured?</h4>
                <p>Yes, they are. Every MamaZap cleaner undergoes rigorous training and background checks. Plus, they're insured, giving you peace of mind while they work in your space.</p>
            </div>
        </div>

    </div>
</div>


<div class="space100"></div>

<!-- PARALLAX -->
<section class="parallax-content parallax2 text-center" data-stellar-background-ratio="0.4">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tc text-center ">
                <h4>Keep stay update in our social media!</h4>
                <p>Join us in social media , and be mama army</p>
                <a  href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a> 
                </a>
                <p>or email us: hello@MamaZap.com</p>
            </div>
        </div>
    </div>
</section>


<!-- CONTACT US -->
<div class="container" id="contact">
    <div class="about-inline text-center">
        <p>- CONTACT US -</p>
        <h3>Customer satisfaction is our top priority, <br> Don’t hesitate to contact us </h3>
    </div>
</div>

<!-- CONTACT INFO -->
<div id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-phone"></i>
                    <h5><b>Call Us</b></h5>
                    <p>(080) 123 456 7890</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-envelope"></i>
                    <h5><b>Email</b></h5>
                    <p><a href="">hello@MamaZap.com</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-map-marker"></i>
                    <h5><b>Address</b></h5>
                    <p>Bukit jalil , Technology Park 5700 </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-lifesaver"></i>
                    <h5><b>WEBSITE</b></h5>
                    <p><a href=""> www.MamaZap.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GOOGLE MAP -->
<div class="google-map">
    <div class="container-fluid no-padding">
        <div id="map"></div>
    </div>
</div>


<!-- FOOTER -->
<footer class="footer2" id="footer2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="index-2.html" class="footer-logo"><img src="images/logo1.png" alt="logo"></a>
                <p>Connect with us, Stay update and join our online community!.</p>
                <div class="space20"></div>
                <div class="footer-social space30">
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>


            <div class="col-md-5">
                <h5>PAYMENT METHODS</h5>
                <img src="images/payment/1.png" alt=""> &nbsp;
                <img src="images/payment/2.png" alt=""> &nbsp;
                <img src="images/payment/3.png" alt=""> &nbsp; 
                <p>© 2023. MamaZap. All Rights Reserved. <br> Designed by group 45</p>

            </div>
        </div>
    </div>
</footer>

<!-- COPYRIGHT -->
<div class="footer-copy">
    <div class="container">
        &copy; 2023. MamaZap. All rights reserved.
    </div>
</div>


<!-- JAVASCRIPT =============================-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/vendors/stellar.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="js/main.js"></script>
<script src="js/vendors/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendors/mc/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
{{--<script src="js/vendors/gmap.js"></script>--}}
</body>

</html>


