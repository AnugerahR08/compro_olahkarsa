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
        <div class="container inno">
            <h1 class="mb-5">
                Comprehensive Method
            </h1>
            <p class="mb-5">
                CSR Innovation is a service that assists companies in designing CSR innovation programs starting from the planning stage, implementation to the measurement stage of the CSR program. We carry out a comprehensive CSR program innovation planning by conducting research on business models, supply chain involvement and the company's shared values. In addition to planning, we are also able to carry out program implementation accompanied by our team of experts within a certain period of time to achieve the sustainability of a CSR program. And we also help measure the impact that the company and stakeholders get by using a comprehensive method.
            </p>
            <img src="{{ asset('/img/services/csrInno/img4.svg') }}" class="img-fluid mb-5" alt="">

            <div class="row row-cols-3 g-4 d-flex justify-content-center">
                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Creative Sponsorship
                        </div>
                        <div class="text">
                            Build engagement and insight through fresh idea sponsorship
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/services/csrComm/comm/icon4.svg') }}" class="img-fluid" alt="">
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
                <button type="button" class="btn btn-outline-light py-2 mb-3">Learn more to know</button>
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
