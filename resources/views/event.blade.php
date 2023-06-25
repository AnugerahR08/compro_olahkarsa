@extends('layouts.main')

@section('title', 'Event | Olahkarsa')

@section('content')

    <!-- ======= Hero ======= -->
    <div class="container" id="event" style="margin-top: 6rem;" data-aos="fade-up">
        <div class="img text-center rounded-4 d-lg-flex justify-content-center px-4 py-5 p-md-5">
            <h1 class="my-3 my-md-5">
                Discover our event with Olahkarsa.<br> Come & join our event, to upgrade your skills
            </h1>
            <div class="card rounded-4 position-absolute card1">
                <div class="row p-4">
                    <div class="col-5">
                        <select class="form-select border-primary" aria-label="Default select example">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control border-0 shadow-none" type="search" placeholder="Search"
                            aria-label="Search">
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded-4 card2">
            <div class="row p-4">
                <div class="col-lg-4 mb-3">
                    <input class="form-control border-0 shadow-none" type="search" placeholder="Search"
                        aria-label="Search">
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="dropdown-center">
                        <button class="btn shadow-none bg-transparent d-flex justify-content-between align-items-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
                            Categories event
                            <i class="fa fa-angle-down" style="font-size: 12px"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 mb-3">
                    <div class="dropdown-center">
                        <button class="btn shadow-none bg-transparent d-flex justify-content-between align-items-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
                            Times
                            <i class="fa fa-angle-down" style="font-size: 12px"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-1 mb-3">
                    <button class="btn btn-primary py-2" type="submit" style="width: 100%">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- ======= Upcoming Event ======= -->
    <div class="container" id="upcoming">
        <div class="row mb-md-3" data-aos="fade-up">
            <div class="col-8 col-md-6">
                <h1 class="title">
                    Upcoming Event
                </h1>
            </div>
            <div class="col-4 col-md-6 d-flex justify-content-end align-items-center">
                <div class="text">
                    <a href="" style="color: #009DFB">
                        See all event
                    </a>
                </div>
            </div>
        </div>

        <div class="card" data-aos="fade-up">
            <div class="title">
                <div class="image rounded-top">
                    <button class="btn btn-primary py-md-3">CSR STORIES</button>
                </div>
            </div>
            <div class="card-body rounded-bottom date">
                <div class="row p-3">
                    <div class="col-lg-3">
                        <div class="card border-0 shadow-none text-light">
                            <div class="d-flex justify-content-center align-items-center" style="background: #009DFB">
                                <i class="bi bi-geo-alt"></i>
                                <div class="card-body">
                                    <p class="title1 m-0">
                                        Place
                                    </p>
                                    <p class="title2 m-0">
                                        Zoom Meeting
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card border-0 shadow-none text-light">
                            <div class="d-flex justify-content-center align-items-center" style="background: #009DFB">
                                <i class="bi bi-calendar2"></i>
                                <div class="card-body">
                                    <p class="title1 m-0">
                                        Date
                                    </p>
                                    <p class="title2 m-0">
                                        08 June 2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card border-0 shadow-none text-light">
                            <div class="d-flex justify-content-center align-items-center" style="background: #009DFB">
                                <i class="bi bi-clock"></i>
                                <div class="card-body">
                                    <p class="title1 m-0">
                                        Time
                                    </p>
                                    <p class="title2 m-0">
                                        13:30 WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card border-0 shadow-none text-light">
                            <div class="d-flex justify-content-center align-items-center" style="background: #009DFB">
                                <i class="bi bi-hourglass"></i>
                                <div class="card-body">
                                    <p class="title1 m-0">
                                        Remining Times
                                    </p>
                                    <p class="title2 m-0">
                                        24:24:30 count
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Upcoming Event -->

    <!-- ======= News ======= -->
    <div class="container" id="news" style="margin-top: 5rem ">
        <div class="row card-group" id="new1">
            <div class="col" data-aos="zoom-in">
                <div class="card border-0 rounded-4">
                    <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                        <h1 class="card-text">
                            Corporate Social Responsibility: Encourage Independence or Dependence?
                        </h1>
                    </div>
                    <div class="card-footer border-0 shadow-none bg-transparent">
                        <div class="row p-2">
                            <div class="col">
                                <i class="bi bi-geo-alt text-primary"></i>
                                Zoom Meeting
                            </div>
                            <div class="col">
                                <i class="bi bi-clock text-primary"></i>
                                09:00 WIB
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="zoom-in">
                <div class="card border-0 rounded-4">
                    <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                        <h1 class="card-text">
                            Corporate Social Responsibility: Encourage Independence or Dependence?
                        </h1>
                    </div>
                    <div class="card-footer border-0 shadow-none bg-transparent">
                        <div class="row p-2">
                            <div class="col">
                                <i class="bi bi-geo-alt text-primary"></i>
                                Zoom Meeting
                            </div>
                            <div class="col">
                                <i class="bi bi-clock text-primary"></i>
                                09:00 WIB
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="zoom-in">
                <div class="card border-0 rounded-4">
                    <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                        <h1 class="card-text">
                            Corporate Social Responsibility: Encourage Independence or Dependence?
                        </h1>
                    </div>
                    <div class="card-footer border-0 shadow-none bg-transparent">
                        <div class="row p-2">
                            <div class="col">
                                <i class="bi bi-geo-alt text-primary"></i>
                                Zoom Meeting
                            </div>
                            <div class="col">
                                <i class="bi bi-clock text-primary"></i>
                                09:00 WIB
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="splide" id="new2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card border rounded-4 shadow-none" data-aos="zoom-in">
                            <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                            <div class="card-body">
                                <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                <h1 class="card-text">
                                    Corporate Social Responsibility: Encourage Independence or Dependence?
                                </h1>
                            </div>
                            <div class="card-footer border-0 shadow-none bg-transparent">
                                <div class="row">
                                    <div class="col">
                                        <i class="bi bi-geo-alt text-primary"></i>
                                        Zoom Meeting
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-clock text-primary"></i>
                                        09:00 WIB
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card border rounded-4 shadow-none" data-aos="zoom-in">
                            <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                            <div class="card-body">
                                <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                <h1 class="card-text">
                                    Corporate Social Responsibility: Encourage Independence or Dependence?
                                </h1>
                            </div>
                            <div class="card-footer border-0 shadow-none bg-transparent">
                                <div class="row">
                                    <div class="col">
                                        <i class="bi bi-geo-alt text-primary"></i>
                                        Zoom Meeting
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-clock text-primary"></i>
                                        09:00 WIB
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card border rounded-4 shadow-none" data-aos="zoom-in">
                            <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                            <div class="card-body">
                                <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                <h1 class="card-text">
                                    Corporate Social Responsibility: Encourage Independence or Dependence?
                                </h1>
                            </div>
                            <div class="card-footer border-0 shadow-none bg-transparent">
                                <div class="row">
                                    <div class="col">
                                        <i class="bi bi-geo-alt text-primary"></i>
                                        Zoom Meeting
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-clock text-primary"></i>
                                        09:00 WIB
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- End News -->

    <!-- ======= Upcoming Event 2 ======= -->
    <div class="container" id="upcoming">
        <div class="row mb-md-3" data-aos="fade-up">
            <div class="col-8 col-lg-6">
                <h1 class="title">
                    Successful Event
                </h1>
            </div>
            <div class="col-4 col-lg-6 d-flex justify-content-end align-items-center">
                <div class="text">
                    <a href="" style="color: #009DFB">
                        See all event
                    </a>
                </div>
            </div>
        </div>

        <div id="news">
            <div class="row card-group" id="new1">
                <div class="col" data-aos="zoom-in">
                    <div class="card border-0 rounded-4">
                        <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                            <h1 class="card-text">
                                Corporate Social Responsibility: Encourage Independence or Dependence?
                            </h1>
                        </div>
                        <div class="card-footer border-0 shadow-none bg-transparent">
                            <div class="row p-2">
                                <div class="col">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    Zoom Meeting
                                </div>
                                <div class="col">
                                    <i class="bi bi-clock text-primary"></i>
                                    09:00 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in">
                    <div class="card border-0 rounded-4">
                        <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                            <h1 class="card-text">
                                Corporate Social Responsibility: Encourage Independence or Dependence?
                            </h1>
                        </div>
                        <div class="card-footer border-0 shadow-none bg-transparent">
                            <div class="row p-2">
                                <div class="col">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    Zoom Meeting
                                </div>
                                <div class="col">
                                    <i class="bi bi-clock text-primary"></i>
                                    09:00 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in">
                    <div class="card border-0 rounded-4">
                        <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                            <h1 class="card-text">
                                Corporate Social Responsibility: Encourage Independence or Dependence?
                            </h1>
                        </div>
                        <div class="card-footer border-0 shadow-none bg-transparent">
                            <div class="row p-2">
                                <div class="col">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    Zoom Meeting
                                </div>
                                <div class="col">
                                    <i class="bi bi-clock text-primary"></i>
                                    09:00 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row card-group mt-3" id="new1">
                <div class="col" data-aos="zoom-in">
                    <div class="card border-0 rounded-4">
                        <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                            <h1 class="card-text">
                                Corporate Social Responsibility: Encourage Independence or Dependence?
                            </h1>
                        </div>
                        <div class="card-footer border-0 shadow-none bg-transparent">
                            <div class="row p-2">
                                <div class="col">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    Zoom Meeting
                                </div>
                                <div class="col">
                                    <i class="bi bi-clock text-primary"></i>
                                    09:00 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in">
                    <div class="card border-0 rounded-4">
                        <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                            <h1 class="card-text">
                                Corporate Social Responsibility: Encourage Independence or Dependence?
                            </h1>
                        </div>
                        <div class="card-footer border-0 shadow-none bg-transparent">
                            <div class="row p-2">
                                <div class="col">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    Zoom Meeting
                                </div>
                                <div class="col">
                                    <i class="bi bi-clock text-primary"></i>
                                    09:00 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in">
                    <div class="card border-0 rounded-4">
                        <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                        <div class="card-body">
                            <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                            <h1 class="card-text">
                                Corporate Social Responsibility: Encourage Independence or Dependence?
                            </h1>
                        </div>
                        <div class="card-footer border-0 shadow-none bg-transparent">
                            <div class="row p-2">
                                <div class="col">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    Zoom Meeting
                                </div>
                                <div class="col">
                                    <i class="bi bi-clock text-primary"></i>
                                    09:00 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="splide slide" id="new2" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card border shadow-none rounded-4" data-aos="zoom-in">
                                <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                    <h1 class="card-text">
                                        Corporate Social Responsibility: Encourage Independence or Dependence?
                                    </h1>
                                </div>
                                <div class="card-footer border-0 shadow-none bg-transparent">
                                    <div class="row">
                                        <div class="col">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            Zoom Meeting
                                        </div>
                                        <div class="col">
                                            <i class="bi bi-clock text-primary"></i>
                                            09:00 WIB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border shadow-none rounded-4" data-aos="zoom-in">
                                <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                    <h1 class="card-text">
                                        Corporate Social Responsibility: Encourage Independence or Dependence?
                                    </h1>
                                </div>
                                <div class="card-footer border-0 shadow-none bg-transparent">
                                    <div class="row">
                                        <div class="col">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            Zoom Meeting
                                        </div>
                                        <div class="col">
                                            <i class="bi bi-clock text-primary"></i>
                                            09:00 WIB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border shadow-none rounded-4" data-aos="zoom-in">
                                <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                    <h1 class="card-text">
                                        Corporate Social Responsibility: Encourage Independence or Dependence?
                                    </h1>
                                </div>
                                <div class="card-footer border-0 shadow-none bg-transparent">
                                    <div class="row">
                                        <div class="col">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            Zoom Meeting
                                        </div>
                                        <div class="col">
                                            <i class="bi bi-clock text-primary"></i>
                                            09:00 WIB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border shadow-none rounded-4" data-aos="zoom-in">
                                <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                    <h1 class="card-text">
                                        Corporate Social Responsibility: Encourage Independence or Dependence?
                                    </h1>
                                </div>
                                <div class="card-footer border-0 shadow-none bg-transparent">
                                    <div class="row">
                                        <div class="col">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            Zoom Meeting
                                        </div>
                                        <div class="col">
                                            <i class="bi bi-clock text-primary"></i>
                                            09:00 WIB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border shadow-none rounded-4" data-aos="zoom-in">
                                <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                    <h1 class="card-text">
                                        Corporate Social Responsibility: Encourage Independence or Dependence?
                                    </h1>
                                </div>
                                <div class="card-footer border-0 shadow-none bg-transparent">
                                    <div class="row">
                                        <div class="col">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            Zoom Meeting
                                        </div>
                                        <div class="col">
                                            <i class="bi bi-clock text-primary"></i>
                                            09:00 WIB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border shadow-none rounded-4" data-aos="zoom-in">
                                <img src="{{ asset('/img/event/news/img.png') }}" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn px-3 mb-2">CSR STORIES</button>
                                    <h1 class="card-text">
                                        Corporate Social Responsibility: Encourage Independence or Dependence?
                                    </h1>
                                </div>
                                <div class="card-footer border-0 shadow-none bg-transparent">
                                    <div class="row">
                                        <div class="col">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            Zoom Meeting
                                        </div>
                                        <div class="col">
                                            <i class="bi bi-clock text-primary"></i>
                                            09:00 WIB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- End Upcoming Event 2 -->

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
            new Splide('#new2', {
                arrows: false,
                autoplay: true,
                type: "loop",
            }).mount();

            new Splide('.slide', {
                arrows: false,
                autoplay: true,
                type: "loop",
            }).mount();
        });
    </script>

@endsection
