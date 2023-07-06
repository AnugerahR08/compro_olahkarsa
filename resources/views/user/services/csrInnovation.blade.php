@extends('user.layouts.main')

@section('title', 'CSR Innovation | Olahkarsa')

@section('content')

    <!-- ======= Hero ======= -->
    <div id="judul">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start p-3">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>
                        Providing CSR innovation programs to create more valuable to the company and stakeholders.
                    </h1>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <p>
                        We develop and implement CSR innovation program comprehensively by conducting core business & corporate value also environmental & social issues. This initiatives could be increase Environment, Social, & Governance (ESG) corporate performance and spread social & environmental impact for societies.
                    </p>
                    <button class="btn btn-primary p-2 px-3">Consultation Now</button>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mb-2">
                    <div class="image">
                        <img src="{{ asset('/img/services/csrInno/img1.png') }}" class="img-fluid rounded-5" alt="">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="image">
                        <img src="{{ asset('/img/services/csrinno/img2.png') }}" class="img-fluid rounded-5" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Communication -->
    <div id="comm">
        <div class="container">
            <div class="row b1">
                <div class="col com1" data-aos="fade-right">
                    <img src="{{ asset('/img/services/csrInno/img3.png') }}" class="img-fluid rounded-5" alt="">
                </div>
                <div class="col" data-aos="fade-left">
                    <h1 class="title">
                        Comprehensive Method
                    </h1>
                    <p class="text">
                        In some cases, we also develop and integrating CSV framework on CSR program for creating economic value while addressing societal needs and challenges. CSV is part of a business process that utilizes the company's resources or core competencies to create economic value as well as social value.
                    </p>
                    <img src="{{ asset('/img/services/csrInno/img3.png') }}" class="img-fluid rounded-5 mb-3 com2" alt="">
                    <div class="row row-cols-2 g-4" id="comm2">
                        <div class="col">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/services/csrInno/icon/icon.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="title mb-2">
                                    Online Media Release
                                </div>
                                <div class="text">
                                    Amplify Reputation & Engage Stakeholders with Online Media.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card p-3">
                                <div class="image mb-2">
                                    <img src="{{ asset('/img/services/csrInno/icon/icon2.svg') }}" class="img-fluid" alt="">
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

                    <section class="splide comm1" id="comm1" aria-label="Basic Structure Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card p-3">
                                        <div class="image mb-2">
                                            <img src="{{ asset('/img/services/csrInno/icon/icon.svg') }}" class="img-fluid" alt="">
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
                                            <img src="{{ asset('/img/services/csrInno/icon/icon2.svg') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="title mb-2">
                                            Virtual Event
                                        </div>
                                        <div class="text">
                                            Sharing the knowledge, strategic about CSR through Virtual Event.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
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
