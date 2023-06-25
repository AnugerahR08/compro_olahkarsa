@extends('layouts.main')

@section('title', 'About | Olahkarsa')

@section('content')
    <!-- ======= Hero ======= -->
    <div id="judul" style="margin-top: 6rem">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start p-3">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>
                        We bring the company to Sustainable Business for Indonesia
                    </h1>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <p>
                        Plan, track, and collaborate effortlessly in one platform. Ready to take your software projects
                        to the next
                        level? Sign
                        up for SR App today and experience the difference in efficiency, collaboration, and success. Get
                        started now and
                        witness
                        the transformation firsthand!
                    </p>
                </div>
            </div>
        </div>
        <iframe width="100%" height="350"
            src="https://www.youtube.com/embed/T61e0KjzW68?controls=0&autoplay=1&mute=1&rel=0&modestbranding=1&loop=1&showinfo=0&fs=0"
            frameborder="0" title="YouTube video player" allowfullscreen data-aos="fade-up">
        </iframe>
        {{-- <img src="{{ asset('/img/about/hero/image.png') }}" class="img-fluid" alt=""> --}}
    </div>
    <!-- End Hero -->

    <!-- ======= Partner ======= -->
    <div id="partner">
        <div class="container">
            <h1 class="text-center mb-md-5" data-aos="fade-up">
                Membership Olahkarsa
            </h1>
            <div class="row">
                <div class="col-lg-6 mb-3" data-aos="fade-right">
                    <div class="card p-3 py-4">
                        <div class="logo d-flex justify-content-center">
                            <img src="{{ asset('img/about/partner/partner1.png') }}" class="img-fluid w-50" alt="">
                        </div>
                        <div class="text px-3">
                            <p>
                                Olahkarsa has also been officially registered as an organization that is part of Social
                                Value International (SVI). Social Value International is a global network that focuses on
                                social impact and social value with a network of more than 45 countries from various
                                disciplines from various sectors.
                            </p>
                        </div>
                        <button type="button" class="btn btn-primary py-2">See Certificate</button>
                    </div>
                </div>
                <div class="col-lg-6 mb-2" data-aos="fade-left">
                    <div class="card p-3 py-4">
                        <div class="logo d-flex justify-content-center">
                            <img src="{{ asset('img/about/partner/partner2.png') }}" class="img-fluid w-50" alt="">
                        </div>
                        <div class="text px-3">
                            <p>
                                Olahkarsa has also been officially registered as an organization that is part of Social
                                Value International (SVI). Social Value International is a global network that focuses on
                                social impact and social value with a network of more than 45 countries from various
                                disciplines from various sectors.
                            </p>
                        </div>
                        <button type="button" class="btn btn-primary py-2">See Certificate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner -->

    <!-- ======= How we are ======= -->
    <div id="hwa">
        <div class="container">
            <h1 class="text-center mb-md-5" data-aos="fade-up">
                How it is all started
            </h1>
            <div class="row">
                <div class="col-md-7 mb-2" data-aos="fade-right">
                    <div class="image">
                        <img src="{{ asset('/img/about/hwa/hwa2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.
                    </div>
                </div>
                <div class="col-md-5 mb-2" data-aos="fade-left">
                    <div class="image">
                        <img src="{{ asset('/img/about/hwa/hwa.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How we are -->

    <!-- ======= Vission and Mission ======= -->
    <div id="vimi" data-aos="fade-up">
        <div class="container">
            <h1 class="text-left mb-5">
                Become a Leader in Creating CSR Innovations to Drive a Sustainable Business Ecosystem and Better Livelihoods
                for The Community
            </h1>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col" data-aos="fade-right">
                    <div class="p-md-2">
                        <div class="image">
                            <img src="{{ asset('/img/about/vimi/vimi.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="text">
                            <p>
                                Creating Massive Awareness About Sustainable Business Practices
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-left">
                    <div class="p-md-2">
                        <div class="image">
                            <img src="{{ asset('/img/about/vimi/vimi2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="text">
                            <p>
                                Encouraging Research-Based CSR Initiatives, Especially in the Program Planning and
                                Evaluation Phase
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-md-2" data-aos="fade-right">
                        <div class="image">
                            <img src="{{ asset('/img/about/vimi/vimi3.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="text">
                            <p>
                                Creating a CSR Program Based on Creating Shared Value In accordance with the Company's Core
                                Business & Core Competency
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-left">
                    <div class="p-md-2">
                        <div class="image">
                            <img src="{{ asset('/img/about/vimi/vimi4.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="text">
                            <p>
                                Conducting Digital Transformation to Support More Optimal CSR Governance
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Vission Mission -->

    <!-- ======= Life at Olahkarsa ======= -->
    <div id="life">
        <div class="container" data-aos="fade-up">
            <div class="title text-center mb-md-5">
                <h1>
                    Life at Olahkarsa
                </h1>
                <p>
                    No matter where you are working from, it is our goal to make everyone feel involved and at home.
                </p>
            </div>
            <div class="row d-flex">
                <div class="col-lg-6 y1">
                    <iframe class="rounded img-fluid" width="560" height="250"
                        src="https://www.youtube.com/embed/T61e0KjzW68" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since.
                    </p>
                </div>
                <div class="col-lg-6 y2">
                    <iframe class="rounded img-fluid" width="560" height="250"
                        src="https://www.youtube.com/embed/T61e0KjzW68" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Life at Olahkarsa -->

    <!-- ======= CTA ======= -->
    <div id="cta" data-aos="fade-up">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 text-light d-flex align-items-center">
                        <div class="p-4 py-md-5 ps-md-">
                            <h1>
                                Together Grow Business with #Olahkarsa
                            </h1>
                            <p>
                                Participate in growing and developing with other teams by taking a role in advancing
                                Indonesia.
                            </p>
                            <button class="btn btn-light text-primary p-2 px-4" style="width: max-content">
                                Learn more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-end">
                        <img src="{{ asset('/img/about/cta/cta.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA -->

    <!-- ======= Olahkarsa Media ======= -->
    <div id="okmedia" data-aos="fade-up">
        <div class="container">
            <div class="title text-center mb-5">
                <h1>
                    Olahkarsa Media
                </h1>
                <p>
                    Media to broadcast Olahkarsa for Indonesian and the world.
                </p>
            </div>

            <!-- Carousel wrapper -->
            <div id="carouselMDExampleIndicators" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                <!-- Slides -->
                <div class="carousel-inner mb-5 shadow-1-strong rounded-3">
                    <div class="carousel-item active">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(88).webp" class="d-block w-100"
                            alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(121).webp" class="d-block w-100"
                            alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(31).webp" class="d-block w-100"
                            alt="..." />
                    </div>
                </div>
                <!-- Slides -->

                <!-- Thumbnails -->
                <div class="carousel-indicators" style="margin-bottom: -20px;">
                    <button type="button" data-mdb-target="#carouselMDExample" data-mdb-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1" style="width: 100px;">
                        <img class="d-block w-100 shadow-1-strong rounded"
                            src="https://mdbcdn.b-cdn.net/img/Photos/Others/Carousel-thumbs/img%20(88).webp"
                            class="img-fluid" />
                    </button>
                    <button type="button" data-mdb-target="#carouselMDExample" data-mdb-slide-to="1"
                        aria-label="Slide 2" style="width: 100px;">
                        <img class="d-block w-100 shadow-1-strong rounded"
                            src="https://mdbcdn.b-cdn.net/img/Photos/Others/Carousel-thumbs/img%20(121).webp"
                            class="img-fluid" />
                    </button>
                    <button type="button" data-mdb-target="#carouselMDExample" data-mdb-slide-to="2"
                        aria-label="Slide 3" style="width: 100px;">
                        <img class="d-block w-100 shadow-1-strong rounded"
                            src="https://mdbcdn.b-cdn.net/img/Photos/Others/Carousel-thumbs/img%20(31).webp"
                            class="img-fluid" />
                    </button>
                </div>
                <!-- Thumbnails -->
            </div>
            <!-- Carousel wrapper -->


            <div id="promotion" class="container d-flex pt-3 pt-lg-5" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 mb-2">
                        <div class="card py-3 px-3 px-lg-2 px-xxl-3">
                            <div class="row g-0">
                                <div
                                    class="col-md-3 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center align-items-lg-start mb-2">
                                    <img src="{{ asset('/img/about/okmedia/icon.svg') }}" alt=""
                                        style="width:40px; height: 40px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Olahkarsa Official</h5>
                                        <p class="card-text">
                                            See interesting video of implementing CSR and Sustainability on Olahkarsa
                                            Youtube
                                        </p>
                                        <a class="icon-link icon-link-hover" href="#">
                                            Visit Us
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card py-3 px-3 px-lg-2 px-xxl-3">
                            <div class="row g-0">
                                <div
                                    class="col-md-3 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center align-items-lg-start mb-2">
                                    <img src="{{ asset('/img/about/okmedia/icon1.svg') }}" alt=""
                                        style="width:40px; height: 40px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Olahkarsa Blog</h5>
                                        <p class="card-text">
                                            Read interesting articles on CSR and Sustainability every day on Olahkarsa Blog
                                        </p>
                                        <a class="icon-link icon-link-hover" href="#">
                                            Visit Us
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card py-3 px-3 px-lg-2 px-xxl-3">
                            <div class="row g-0">
                                <div
                                    class="col-md-3 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center align-items-lg-start mb-2">
                                    <img src="{{ asset('/img/about/okmedia/icon2.svg') }}" alt=""
                                        style="width:40px; height: 40px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Olahkarsa Podcast</h5>
                                        <p class="card-text">
                                            Listen interesting discussion on CSR and Sustainability every day on Olahkarsa
                                            Podcast
                                        </p>
                                        <a class="icon-link icon-link-hover" href="#">
                                            Visit Us
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Olahkarsa Media -->

    <!-- ======= CTA 2 ======= -->
    <div id="cta2">
        <div class="container text-light text-center" data-aos="fade-up">
            <h1>
                Are you ready to make a meaningful impact on society?
            </h1>

            <p class="p-0">
                Let Olahkarsa help your corporate social responsibility initiatives succeed!
            </p>

            <div>
                <button type="button" class="btn btn-light text-primary py-2 mb-3">Contact us</button>
                <button type="button" class="btn btn-outline-light py-2 mb-3">Learn more to know</button>
            </div>
        </div>
    </div>
    <!-- End CTA 2 -->


@endsection
