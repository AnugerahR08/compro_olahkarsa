@extends('layouts.main')

@section('title', 'CSR Communication | Olahkarsa')

@section('content')
    <!-- ======= Hero ======= -->
    <div id="judul" style="margin-top: 6rem">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start p-3">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>
                        Communication is Key to the Success of CSR Program
                    </h1>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <p>
                        We assist companies in conducting research assisted by several teams that helps companies in
                        conducting research and development in the field of CSR.
                    </p>
                    <button class="btn btn-primary p-2 px-3">Consultation Now</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-2">
                    <div class="image">
                        <img src="{{ asset('/img/csrComm/hero/hero.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="image">
                        <img src="{{ asset('/img/csrComm/hero/hero2.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- ======= Communication ======= -->
    <div id="comm">
        <div class="container">
            <div class="row b1">
                <div class="col com1">
                    <img src="{{ asset('/img/csrComm/comm/img.png') }}" class="img-fluid card border-0" alt="">
                </div>
                <div class="col">
                    <h1 class="title">
                        The Power of Effective Communication
                    </h1>
                    <p class="text">
                        Communication between stakeholders and the CSR program plays a crucial role in its success.
                    </p>
                    <img src="{{ asset('/img/csrComm/comm/img.png') }}" class="img-fluid card border-0 mb-3 com2"
                        alt="">
                    <div class="row mb-3" id="comm2">
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon1.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="title mb-2">
                                    Online Media Release
                                </div>
                                <div class="text">
                                    Amplify Reputation & Engage Stakeholders with Online Media.
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon2.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="title mb-2">
                                    Virtual Event
                                </div>
                                <div class="text">
                                    Sharing the knowledge, strategic about CSR through Virtual Event.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="comm2">
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon3.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="title mb-2">
                                    Video Production
                                </div>
                                <div class="text">
                                    Make CSR communication through video with a good visual
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="title mb-2">
                                    Creative Sponsorship
                                </div>
                                <div class="text">
                                    Build engagement and insight through fresh idea sponsorship
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="splide comm1" id="comm1" aria-label="Basic Structure Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon1.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Online Media Release
                                        </div>
                                        <div class="text">
                                            Amplify Reputation & Engage Stakeholders with Online Media.
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon2.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Virtual Event
                                        </div>
                                        <div class="text">
                                            Sharing the knowledge, strategic about CSR through Virtual Event.
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon3.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Video Production
                                        </div>
                                        <div class="text">
                                            Make CSR communication through video with a good visual
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon4.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Creative Sponsorship
                                        </div>
                                        <div class="text">
                                            Build engagement and insight through fresh idea sponsorship
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row b2">
                <div class="col">
                    <h1 class="title">
                        Utilizing Digital Communication for CSR
                    </h1>
                    <p class="text">
                        Embracing Cutting-Edge Digital Strategies for Next-Level CSR Campaigns and Programs.
                    </p>
                    <img src="{{ asset('/img/csrComm/comm/img2.png') }}" class="img-fluid card border-0 mb-3 com2"
                        alt="">
                    <div class="row mb-3" id="comm2">
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon5.svg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="title mb-2">
                                    Online Media Release
                                </div>
                                <div class="text">
                                    Amplify Reputation & Engage Stakeholders with Online Media.
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon6.svg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="title mb-2">
                                    Virtual Event
                                </div>
                                <div class="text">
                                    Sharing the knowledge, strategic about CSR through Virtual Event.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="comm2">
                        <div class="col-6 col-md-6">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/csrComm/comm/icon7.svg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="title mb-2">
                                    Video Production
                                </div>
                                <div class="text">
                                    Make CSR communication through video with a good visual
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="splide comm2" id="comm1" aria-label="Basic Structure Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon5.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Online Media Release
                                        </div>
                                        <div class="text">
                                            Amplify Reputation & Engage Stakeholders with Online Media.
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon6.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Virtual Event
                                        </div>
                                        <div class="text">
                                            Sharing the knowledge, strategic about CSR through Virtual Event.
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/csrComm/comm/icon7.svg') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Video Production
                                        </div>
                                        <div class="text">
                                            Make CSR communication through video with a good visual
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col com1">
                    <img src="{{ asset('/img/csrComm/comm/img2.png') }}" class="img-fluid card border-0" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Communication -->

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
                <button type="button" class="btn btn-outline-light py-2 mb-3">Leanrn more to know</button>
            </div>
        </div>
    </div>
    <!-- End CTA 2 -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const splide = new Splide('.comm1', {
                arrows: false,
                type: 'loop',
                autoplay: true,
            });
            splide.mount();

            const splide2 = new Splide('.comm2', {
                arrows: false,
                type: 'loop',
                autoplay: true,
            });
            splide2.mount();
        });
    </script>

@endsection
