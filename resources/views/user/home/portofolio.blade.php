@extends('user.layouts.main')

@section('title', 'Portofolio | Olahkarsa')

@section('content')
    <!-- ======= Hero ======= -->
    <div class="container" id="porto">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 p-3 p-lg-0" data-aos="fade-right">
                <img src="{{ asset('/img/home/porto/hero/logo.svg') }}" class="img-fluid mb-2" alt="">
                <div class="title mb-2">Gugas Nurani Indonesia SR Apps</div>
                <div class="date mb-2">2022-2023</div>
                <div class="text mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum
                    has been the industry's standard dummy text ever since the 1500s,</div>
                <button class="btn btn-primary px-4 py-2">Scroll now</button>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-dark rounded-4 port">

                </div>
            </div>
        </div>
        <p class="text mt-3 mt-lg-5 p-3 p-lg-0" data-aos="fade-up">
            Experience spiritual growth and well-being with the SR App by Gugah Nurani Indonesia. Discover guided
            meditations, mindfulness practices, and transformative teachings. Connect with a supportive community and embark
            on a journey of self-discovery. Download now and nurture your soul on the go.
        </p>
    </div>
    <!-- End Hero -->

    <!-- ======= Deliver ======= -->
    <div class="container" id="deliver">
        <div class="row px-3">
            <div class="col-md-6 mb-4">
                <h1 class="mb-md-4" data-aos="fade-up">
                    Deliverables
                </h1>
                <div class="row g-2" data-aos="fade-up">
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        iOS & Android App
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        iOS & Android App
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        iOS & Android App
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        iOS & Android App
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h1 class="mb-md-4" data-aos="fade-up">
                    Technology
                </h1>
                <div class="row g-2" data-aos="fade-up">
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        iOS
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        React JS
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        Android
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/home/porto/deliver/icon.svg') }}" class="img-fluid me-2" alt="">
                        Laravel
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Deliver -->

    <!-- ======= Component ======= -->
    <div class="container" id="compo">
        <div class="row mb-4 px-3" data-aos="fade-up">
            <div class="col-lg-6 d-flex align-items-center mb-3" data-aos="fade-right">
                <div class="flex-column">
                    <div class="title">
                        Connecting 4,000+ member in real-time
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('/img/home/porto/compo/compo.png') }}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row px-3" data-aos="fade-up">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('/img/home/porto/compo/compo.png') }}" class="img-fluid g1" alt="">
            </div>
            <div class="col-lg-6 d-flex align-items-center mb-3" data-aos="fade-left">
                <div class="flex-column">
                    <div class="title">
                        Connecting 4,000+ member in real-time
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
            <img src="{{ asset('/img/home/porto/compo/compo.png') }}" class="img-fluid g2" alt="">
        </div>
    </div>
    <!-- End Componet -->

    <!-- ======= Scope ======= -->
    <div class="container" id="scope">
        <div class="text-center mb-lg-5" data-aos="fade-up">
            <h1>Scope we handled</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 mb-2" data-aos="zoom-in">
                <div class="card p-3">
                    <div class="image mb-2">
                        <img src="{{ asset('/img/home/porto/scope/icon.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="title mb-2">
                        Audit & Design
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-2" data-aos="zoom-in">
                <div class="card p-3">
                    <div class="image mb-2">
                        <img src="{{ asset('/img/home/porto/scope/icon.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="title mb-2">
                        Implementation
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-2" data-aos="zoom-in">
                <div class="card p-3">
                    <div class="image mb-2">
                        <img src="{{ asset('/img/home/porto/scope/icon.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="title mb-2">
                        Integration
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-" data-aos="zoom-in">
                <div class="card p-3">
                    <div class="image mb-2">
                        <img src="{{ asset('/img/home/porto/scope/icon.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="title mb-2">
                        Support
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Componet -->

    <!-- ======= Component 2 ======= -->
    <div class="container" id="compo">
        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-6 d-flex align-items-center mb-3" data-aos="fade-right">
                <div class="flex-column">
                    <div class="title">
                        Connecting 4,000+ member in real-time
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('/img/home/porto/compo/compo.png') }}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('/img/home/porto/compo/compo.png') }}" class="img-fluid g1" alt="">
            </div>
            <div class="col-lg-6 d-flex align-items-center mb-3" data-aos="fade-left">
                <div class="flex-column">
                    <div class="title">
                        Connecting 4,000+ member in real-time
                    </div>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
            <img src="{{ asset('/img/home/porto/compo/compo.png') }}" class="img-fluid g2" alt="">
        </div>
    </div>
    <!-- End Componet 2 -->

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

@endsection
