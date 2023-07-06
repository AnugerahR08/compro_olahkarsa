@extends('user.layouts.main')

@section('title', 'About | Olahkarsa')

@section('content')
    <!-- ======= Hero ======= -->
    <div id="judul" style="margin-top: 8rem">
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
        {{-- <img src="{{ asset('/img/company/about/hero/image.png') }}" class="img-fluid" alt=""> --}}
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
                            <img src="{{ asset('img/company/about/partner/partner1.png') }}" class="img-fluid w-50" alt="">
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
                            <img src="{{ asset('img/company/about/partner/partner2.png') }}" class="img-fluid w-50" alt="">
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
                        <img src="{{ asset('/img/company/about/hwa/hwa2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.
                    </div>
                </div>
                <div class="col-md-5 mb-2" data-aos="fade-left">
                    <div class="image">
                        <img src="{{ asset('/img/company/about/hwa/hwa.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('/img/company/about/vimi/vimi.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('/img/company/about/vimi/vimi2.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('/img/company/about/vimi/vimi3.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('/img/company/about/vimi/vimi4.png') }}" class="img-fluid" alt="">
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
                        <img src="{{ asset('/img/company/about/cta/cta.png') }}" alt="">
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
            <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://img.freepik.com/free-photo/landmarks-modern-city_1359-338.jpg?w=1380&t=st=1688360112~exp=1688360712~hmac=8342294b600765d7b9827155eff7a8d215cc569f0562cfc9b74b7ab091be21b6"
                                alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://img.freepik.com/free-photo/giant-building-with-sun_1127-400.jpg?w=1380&t=st=1688360538~exp=1688361138~hmac=2bc5245586d17cfac22a17a3d9cdf3935b2d3e11731552398b2350e1fd6723b9"
                                alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?w=1380&t=st=1688360588~exp=1688361188~hmac=9a1d1ad33e2d52f16916d9bb94b6625f644c74267258cdfbd08e08d7fdc73a15"
                                alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://img.freepik.com/free-photo/empty-floor-front-modern-building_1127-3154.jpg?w=1380&t=st=1688360617~exp=1688361217~hmac=ae0249bab85a1c392722e04fc47eb05d810a8113ff2cd3286691cced4503293d"
                                alt="">
                        </li>
                    </ul>
                </div>
            </section>


            <ul id="thumbnails" class="thumbnails">
                <li class="thumbnail">
                    <img src="https://img.freepik.com/free-photo/landmarks-modern-city_1359-338.jpg?w=1380&t=st=1688360112~exp=1688360712~hmac=8342294b600765d7b9827155eff7a8d215cc569f0562cfc9b74b7ab091be21b6"
                        alt="">
                </li>
                <li class="thumbnail">
                    <img src="https://img.freepik.com/free-photo/giant-building-with-sun_1127-400.jpg?w=1380&t=st=1688360538~exp=1688361138~hmac=2bc5245586d17cfac22a17a3d9cdf3935b2d3e11731552398b2350e1fd6723b9"
                        alt="">
                </li>
                <li class="thumbnail">
                    <img src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?w=1380&t=st=1688360588~exp=1688361188~hmac=9a1d1ad33e2d52f16916d9bb94b6625f644c74267258cdfbd08e08d7fdc73a15"
                        alt="">
                </li>
                <li class="thumbnail">
                    <img src="https://img.freepik.com/free-photo/empty-floor-front-modern-building_1127-3154.jpg?w=1380&t=st=1688360617~exp=1688361217~hmac=ae0249bab85a1c392722e04fc47eb05d810a8113ff2cd3286691cced4503293d"
                        alt="">
                </li>
            </ul>
            <!-- Carousel wrapper -->


            <div id="promotion" class="container d-flex pt-3 pt-lg-5 mt-5">
                <div class="row">
                    <div class="col-lg-4 mb-2" data-aos="zoom-in">
                        <div class="card py-3 px-3 px-lg-2 px-xxl-3">
                            <div class="row g-0">
                                <div
                                    class="col-md-3 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center align-items-lg-start mb-2">
                                    <img src="{{ asset('/img/company/about/okmedia/icon.svg') }}" alt=""
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
                    <div class="col-lg-4 mb-2" data-aos="zoom-in">
                        <div class="card py-3 px-3 px-lg-2 px-xxl-3">
                            <div class="row g-0">
                                <div
                                    class="col-md-3 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center align-items-lg-start mb-2">
                                    <img src="{{ asset('/img/company/about/okmedia/icon1.svg') }}" alt=""
                                        style="width:40px; height: 40px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Olahkarsa Blog</h5>
                                        <p class="card-text">
                                            Read interesting articles on CSR and Sustainability every day on Olahkarsa
                                            Blog
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
                    <div class="col-lg-4 mb-2" data-aos="zoom-in">
                        <div class="card py-3 px-3 px-lg-2 px-xxl-3">
                            <div class="row g-0">
                                <div
                                    class="col-md-3 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center align-items-lg-start mb-2">
                                    <img src="{{ asset('/img/company/about/okmedia/icon2.svg') }}" alt=""
                                        style="width:40px; height: 40px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Olahkarsa Podcast</h5>
                                        <p class="card-text">
                                            Listen interesting discussion on CSR and Sustainability every day on
                                            Olahkarsa
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

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('#main-carousel', {
                pagination: false,
            });

            var thumbnails = document.getElementsByClassName('thumbnail');
            var current;

            for (var i = 0; i < thumbnails.length; i++) {
                initThumbnail(thumbnails[i], i);
            }

            function initThumbnail(thumbnail, index) {
                thumbnail.addEventListener('click', function() {
                    splide.go(index);
                });
            }
            splide.on('mounted move', function() {
                var thumbnail = thumbnails[splide.index];
                if (thumbnail) {
                    if (current) {
                        current.classList.remove('is-active');
                    }
                    thumbnail.classList.add('is-active');
                    current = thumbnail;
                }
            });
            splide.mount();
        });
    </script>


@endsection
