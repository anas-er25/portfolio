<!DOCTYPE html>
<html lang="en">

<head>
    <title>ANAS ER-RAKIBI - Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo1.png') }}">

    <link rel="stylesheet" href="{{ url('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">

    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('css/ionicons.min.cs') }}">

    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">ANASFOLIO</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    @if (count($resumes) > 0)
                        <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    @endif
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    @if (count($skills) > 0)
                        <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    @endif
                    @if (count($projects) > 0)
                        <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    @endif
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                    @if (auth()->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link"><span>Login</span></a></li>
                    @endif


                </ul>
            </div>
        </div>
    </nav>
    {{-- home-ection --}}
    <section id="home-section" class="hero">
        <header id="home" class="vh-100 text-center text-white">
            <div class="layer w-100 h-100 d-flex justify-content-center align-items-center">
                <div class="container  d-flex flex-column align-items-center justify-content-center">
                    <h5>Hello</h5>
                    <div class="header-caption" id="page-top">
                        <h1 class="cd-headline clip is-full-width">
                            <span class="fw-light">I Am</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible fw-medium">Anas ER-RAKIBI</b>
                                <b class="is-hidden fw-medium"> Full Stack Developer</b>
                            </span>
                        </h1>
                    </div>
                    <ul class="mt-4 d-flex gap-3">
                        <li><a href="https://web.facebook.com/taner.olmez.160" class="text-white"><i
                                    class="icon-facebook"></i></a></li>&nbsp;&nbsp;
                        <li><a href="https://www.linkedin.com/in/anas-er-rakibi/" class="text-white"><i
                                    class="icon-linkedin-square"></i></a></li>&nbsp;&nbsp;
                        <li><a href="https://www.instagram.com/anas_errakibi/" class="text-white"><i
                                    class="icon-instagram"></i></a></li>&nbsp;&nbsp;
                        <li><a href="https://youtube.com/@anaser-rakibi2968" class="text-white"><i
                                    class="icon-youtube-play"></i></a></li>&nbsp;&nbsp;
                        <li><a href="https://github.com/anas-er25" class="text-white"><i
                                    class="icon-github-alt"></i></a></li>

                    </ul>
                </div>
            </div>
        </header>
    </section>
    {{-- about --}}
    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section" data-aos="fade-right">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url(images/port.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-2">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>Anas ER-RAKIBI</span></li>
                                <li class="d-flex"><span>Date of birth:</span> <span>November 25,2002</span></li>
                                <li class="d-flex"><span>Address:</span> <span>Ouarzazate 45000 Morocco</span></li>
                                <li class="d-flex"><span>Email:</span> <span>errakibianas8@gmail.com</span></li>
                                <li class="d-flex"><span>Phone: </span> <span>+212 696486911</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p><a href="pdfs/cv.pdf" class="btn btn-primary py-3 px-3" download>Download CV</a></p>
                        </div>&nbsp;&nbsp;
                        <div class="text">
                            <p><a href="#contact-section" class="btn btn-primary py-3 px-3">Contact me</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- resume --}}
    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-2">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>I am currently a Full Stack developer in second year.</p>
                </div>
            </div>
            <div class="row">
                @if (count($resumes) > 0)
                    @foreach ($resumes as $resume)
                        <div class="col-md-6">
                            <div class="resume-wrap ftco-animate">
                                <span class="date">{{ $resume->year }}</span>
                                <h2>{{ $resume->text }}</h2>
                                <span class="position">{{ $resume->school }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="{{ asset('pdfs/cv.pdf') }}" class="btn btn-primary py-4 px-5" download>Download CV</a></p>
                </div>
            </div>
        </div>
    </section>
    {{-- services --}}
    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center pb-2">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <p>I will be glad to serve you</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center d-flex ftco-animate">
                    <a href="javascript:;" class="services-1">
                        <span class="icon">
                            <i class="flaticon-web-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Design</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 text-center d-flex ftco-animate">
                    <a href="javascript:;" class="services-1">
                        <span class="icon">
                            <i class="flaticon-innovation"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Developer</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Skills --}}
    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-2">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                </div>
            </div>
            <div class="row">
                @if (count($skills) > 0)
                    @foreach ($skills as $skill)
                        <div class="col-md-6 animate-box">
                            <div class="progress-wrap ftco-animate">
                                <h3>{{ $skill->skill_name }}</h3>
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar"
                                        aria-valuenow="{{ $skill->percent }}" aria-valuemin="0" aria-valuemax="100"
                                        style="width:{{ $skill->percent }}%">
                                        <span>{{ $skill->percent }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{-- projects --}}
    @if (count($projects) > 0)
        <section class="ftco-section ftco-project" id="projects-section">
            <div class="container">
                <div class="row justify-content-center pb-2">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Projects</h1>
                        <h2 class="mb-4">My Projects</h2>
                    </div>
                </div>
                <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        @foreach ($projects as $key => $project)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                            style="background-image: url({{ url($project->image_project) }});">
                                            <div class="overlay"></div>
                                            <div class="text text-center p-4">
                                                <h3>{{ $project->title }}</h3>
                                                <span><a href="{{ $project->link_project }}">View Project</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#projectCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </a>
                    <a class="carousel-control-next" href="#projectCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </a>
                </div>
            </div>
        </section>
    @endif

    {{-- Skills --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="{{ count($projects) }}">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/wtsp1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for freelancing</h2>
                    <p class="mb-0"><a href="#contact-section" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>
    {{-- contact --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>Ouarzazate 45000 Morocco</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel:+212 696486911">+212 696486911</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:errakibianas8@gmail.com">errakibianas8@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">ANASFOLIO</h3>
                        <p><a href="{{ url('https://anas-er25.github.io/DEVOWFS2024/') }}">DEVOWFS.com</a></p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{ url('contact_mail') }}" class="bg-light p-4 p-md-5 contact-form"
                        method='POST'>
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name"
                                id="name" value="{{ old('name') }}">
                            @error('name')
                                <div id="emailHelp" class="form-text form-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email"
                                id="email" value="{{ old('email') }}">
                            @error('email')
                                <div id="emailHelp" class="form-text form-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Phone" name="tel"
                                id="tel" value="{{ old('tel') }}">
                            @error('tel')
                                <div id="emailHelp" class="form-text form-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="message" cols="30" rows="7" class="form-control" placeholder="Message" name="message"
                                value="{{ old('message') }}"></textarea>
                            @error('message')
                                <div id="emailHelp" class="form-text form-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url(images/port.jpg);"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- le footer --}}
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>Hi there!, my name is ER-RAKIBI Anas, I'm a fullstack developer student currently in my second year of study at OFPPT Ouarzazate.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://www.linkedin.com/in/anas-er-rakibi/"><span
                                        class="icon-linkedin-square"></span></a></li>
                            <li class="ftco-animate"><a href="https://web.facebook.com/taner.olmez.160"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/anas_errakibi/"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a>
                            </li>
                            <li><a href="#services-section"><span
                                        class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#projects-section"><span
                                        class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Ouarzazate 45000
                                        Morocco</span></li>
                                <li><a href="tel:+212696486911"><span class="icon icon-phone"></span><span
                                            class="text">+212
                                            696486911</span></a></li>
                                <li>
                                    <a href="mailto:errakibianas8@gmail.com">
                                        <span class="icon icon-envelope"></span>
                                        <span class="text">errakibianas8@gmail.com</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved by <a href="/"
                            target="_blank">Anas ER-RAKIBI</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/aos.js') }}"></script>
    <script src="{{ url('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ url('js/scrollax.min.js') }}"></script>

    <script src="{{ url('js/main.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript code to activate the carousel
        $(document).ready(function() {
            $('#projectCarousel').carousel();
        });
    </script>


</html>

</body>
