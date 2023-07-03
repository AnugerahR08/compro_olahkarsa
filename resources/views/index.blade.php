@extends('layouts.main')

@section('title', 'Olahkarsa - End-to-end Solution for CSR Management')

@section('content')
    <!-- ======= Hero ======= -->
    <section id="hero" class="d-flex text-center align-items-center justify-content-center" data-aos="fade-up">
        <div class="container" id="inhero">

            <div class="row justify-content-center mb-2">
                <div class="col-lg-8">
                    <h1>End-to-end Solution <br> for CSR Management</h1>
                    <h5>With CSR we bring the company to Sustainable Business</h5>
                </div>
            </div>

            <div class="mb-5">
                <button type="button" class="btn btn-primary px-4 py-3 mb-2">Get started</button>
                <button type="button" class="btn btn-outline-primary px-4 py-3 mb-2">See how it works</button>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Hero Images ======= -->
    {{-- <div class="" id="heroimg">
        <div class="row ms-0 me-0">
            <div class="col-xl-7 col-xxl-8 ps-0 pe-0 text-center">
                <img src="{{ asset('/img/leandingPage/hero/Image.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-xl-5 col-xxl-4 ps-0 pe-0">
                <div class="row ms-0 me-0">
                    <div class="col-12 ps-0 pe-0 text-center">
                        <img src="{{ asset('/img/leandingPage/hero/Image3.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-12 ps-0 pe-0 text-center">
                        <img src="{{ asset('/img/leandingPage/hero/Image2.png') }}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
    {{-- <table class="table" data-aos="fade-up">
        <tbody>
            <tr class="m-0">
                <td rowspan="2" class="p-0">
                    <img src="{{ asset('/img/leandingPage/hero/Image.png') }}" class="img-fluid" alt="...">
                </td>
                <td class="p-0">
                    <img src="{{ asset('/img/leandingPage/hero/Image3.png') }}" class="img-fluid" alt="...">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                    <img src="{{ asset('/img/leandingPage/hero/Image2.png') }}" class="img-fluid" alt="...">
                </td>
            </tr>
        </tbody>
    </table> --}}
    <!-- End Hero Images -->

    <!-- ======= Services ======= -->
    <div class="d-flex justify-content-center py-4" id="services">
        <div class="container row w-100" data-aos="fade-up">
            <div class="col-lg-3">
                <div class="card bg-transparent shadow-0 border-0">
                    <div class="card-body text-white">
                        <h6 class="card-title">CSR Research & Development</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum obcaecati quae nostrum
                            corporis repudiandae.
                        </p>
                        <a class="card-footer bg-transparent border-0 shadow-none p-0 icon-link icon-link-hover"
                            href="#">
                            Detail more
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-transparent border-0 shadow-0">
                    <div class="card-body text-white">
                        <h6 class="card-title">CSR Innovation</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum obcaecati quae nostrum
                            corporis repudiandae.
                        </p>
                        <a class="card-footer bg-transparent border-0 shadow-none p-0 icon-link icon-link-hover"
                            href="#">
                            Detail more
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-transparent border-0 shadow-0">
                    <div class="card-body text-white">
                        <h6 class="card-title">CSR Communication</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum obcaecati quae nostrum
                            corporis repudiandae.
                        </p>
                        <a class="card-footer bg-transparent border-0 shadow-none p-0 icon-link icon-link-hover"
                            href="#">
                            Detail more
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-transparent border-0 shadow-0">
                    <div class="card-body text-white">
                        <h6 class="card-title">CSR School</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum obcaecati quae nostrum
                            corporis repudiandae.
                        </p>
                        <a class="card-footer bg-transparent border-0 shadow-none p-0 icon-link icon-link-hover"
                            href="#">
                            Detail more
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- ======= Promotion ======= -->
    <div id="promotion">
        <div class="container d-flex mt-5">
            <div class="row align-items-center p-3">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>
                        Simplify your software development journey with our powerful tools
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

        <div class="container mt-5" data-aos="fade-up">
            <img src="{{ asset('/img/leandingPage/promotion/Image.jpg') }}" class="img-fluid" alt="...">
        </div>

        <div class="container d-flex mt-5" data-aos="fade-up">
            <section class="splide" id="cor1" aria-labelledby="carousel-heading">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card rounded-3 py-3">
                                <div class="row g-0 px-2">
                                    <div class="col-lg-3 d-flex justify-content-center">
                                        <img src="{{ asset('/img/icon/icon13.svg') }}" class="img-fluid" alt=""
                                            style="width:42px; height: 42px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">Features 1</h5>
                                            <p class="card-text">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cupiditate
                                                reprehenderit similique.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card rounded-3 py-3">
                                <div class="row g-0 px-2">
                                    <div class="col-lg-3 d-flex justify-content-center">
                                        <img src="{{ asset('/img/icon/icon14.svg') }}" class="img-fluid" alt=""
                                            style="width:42px; height: 42px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">Features 2</h5>
                                            <p class="card-text">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cupiditate
                                                reprehenderit similique.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card rounded-3 py-3">
                                <div class="row g-0 px-2">
                                    <div class="col-lg-3 d-flex justify-content-center">
                                        <img src="{{ asset('/img/icon/icon15.svg') }}" class="img-fluid" alt=""
                                            style="width:42px; height: 42px;">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">Features 3</h5>
                                            <p class="card-text">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cupiditate
                                                reprehenderit similique.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="row" id="cor2">
                <div class="col">
                    <div class="card rounded-3 py-3 px-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('/img/icon/icon13.svg') }}" class="img-fluid" alt=""
                                    style="width:42px; height: 42px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0">
                                    <h5 class="card-title">Features 1</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cupiditate
                                        reprehenderit similique.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-3 py-3 px-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('/img/icon/icon14.svg') }}" class="img-fluid" alt=""
                                    style="width:42px; height: 42px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0">
                                    <h5 class="card-title">Features 2</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cupiditate
                                        reprehenderit similique.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-3 py-3 px-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('/img/icon/icon15.svg') }}" class="img-fluid" alt=""
                                    style="width:42px; height: 42px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0">
                                    <h5 class="card-title">Features 3</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cupiditate
                                        reprehenderit similique.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promotion -->

    <!-- ======= CTA ======= -->
    <div id="cta">
        <div class="container">
            <div class="card rounded-4">
                <div class="row">
                    <div class="col-md-7 text-light d-flex align-items-center">
                        <div class="p-4 py-md-5 ps-md-5">
                            <h1>
                                Let’s try SR App Demo
                            </h1>
                            <p>
                                It's time for your company's CSR management to transform digitally and can manage your
                                office
                            </p>
                            <button class="btn btn-light text-primary p-2 px-4" style="width: max-content">
                                Learn more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end align-items-end">
                        <img src="{{ asset('/img/leandingPage/cta/cta.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA -->

    {{-- <img src="{{ asset('/img/leandingPage/cta/CTA.jpg') }}" class="img-fluid mb-5" alt="..."> --}}
    <!-- End CTA -->

    <!-- ======= Strategic ======= -->
    <div class="container" id="strategic">
        <div class="row">
            <div class="col-md-6 str1" data-aos="fade-right">
                <img src="{{ asset('/img/leandingPage/strategic/image.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="">
                    <div class="card border-0 p-2" data-aos="fade-down-left">
                        OLAHAKARSA HELPING YOU GROW
                    </div>

                    <p data-aos="fade-up-left">
                        More than 25,000 companies in 300 cities have grown with Olahkarsa
                    </p>

                    <button type="button" class="btn btn-primary px-5 py-2" data-aos="fade-up">Get started</button>
                </div>
            </div>
            <div class="mt-3 str2" data-aos="fade-right">
                <img src="{{ asset('/img/leandingPage/strategic/image.png') }}" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
    <!-- End Strategic -->

    <!-- ======= Clients ======= -->
    <div class="container" id="clients" data-aos="fade-up">
        <h1>
            Our Happy Clients
        </h1>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
        </p>

        <div class="container text-center">
            <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-3 cli1">
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien1.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien2.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien3.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien4.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien5.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien6.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien7.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien8.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien9.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien10.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien11.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien12.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien13.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien14.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('/img/clien/clien15.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <section class="splide cli2" id="cli" aria-label="Basic Structure Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-3">
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien1.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien2.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien3.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien4.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien5.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien6.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien7.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien8.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien9.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-3">
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien10.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien11.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien12.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien13.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien14.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <img src="{{ asset('/img/clien/clien15.svg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        {{-- <img src="{{ asset('/img/leandingPage/clients/logo.png') }}" class="img-fluid m-2" alt="...">
        <img src="{{ asset('/img/leandingPage/clients/logo2.png') }}" class="img-fluid m-2" alt="...">
        <img src="{{ asset('/img/leandingPage/clients/logo3.png') }}" class="img-fluid m-2" alt="..."> --}}
    </div>
    <!-- End Clients -->

    <!-- ======= Our Works ======= -->
    <div class="container" id="ourworks" data-aos="fade-up">
        <div id="our1">
            <h1>Our works Olahkarsa</h1>
            <div class="row justify-content-evenly mt-5">
                <div class="col-6 col-lg-6 card border-0 mb-3 rounded-4">
                    <a href="/Portofolio">
                        <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Corporate Website</h5>
                            <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech into the built
                                world with a modular and scalable brand.</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-6 card border-0 mb-3 rounded-4">
                    <a href="/Portofolio">
                        <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Corporate Website</h5>
                            <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech into the built
                                world with a modular and scalable brand.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-6 col-md-6 card border-0 mb-3 rounded-4">
                    <a href="/Portofolio">
                        <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Corporate Website</h5>
                            <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech into the built
                                world with a modular and scalable brand.</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 card border-0 mb-3 rounded-4">
                    <a href="/Portofolio">
                        <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Corporate Website</h5>
                            <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech into the built
                                world with a modular and scalable brand.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div id="our2">
            <h1>Our works Olahkarsa</h1>
            <section class="splide" id="our" aria-label="Basic Structure Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card border-0 mb-3 rounded-4">
                                <a href="/Portofolio">
                                    <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Corporate Website</h5>
                                        <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech
                                            into the built
                                            world with a modular and scalable brand.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border-0 mb-3 rounded-4">
                                <a href="/Portofolio">
                                    <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Corporate Website</h5>
                                        <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech
                                            into the built
                                            world with a modular and scalable brand.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border-0 mb-3rounded-4">
                                <a href="/Portofolio">
                                    <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Corporate Website</h5>
                                        <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech
                                            into the built
                                            world with a modular and scalable brand.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card border-0 mb-3 rounded-4">
                                <a href="/Portofolio">
                                    <img src="{{ asset('/img/leandingPage/ourworks/image.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Corporate Website</h5>
                                        <p class="card-text">Supporting Backpack in their ambitious plan to breathe tech
                                            into the built
                                            world with a modular and scalable brand.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary py-2 px-5">See more project</button>
        </div>
    </div>
    <!-- End Clients -->

    <!-- ======= Testimonial ======= -->
    <div class="container" id="testimonial" data-aos="fade-up">
        <div class="text-center">
            <h1>
                What our partner say about Olahkarsa
            </h1>
            <p>
                Partner say about Olahkarsa services in many companies.
            </p>
        </div>
    </div>

    <section class="splide d-flex w-100" id="slide" aria-label="Beautiful Images" data-aos="fade-up">
        <div class="splide__slider container justify-content-center align-items-center">
            <div class="splide__track overflow-visible">
                <div class="splide__list text-light">

                    <div class="splide__slide card justify-content-center align-items-center mx-md-3">
                        <div class="card-body">
                            <p class="card-text">
                                “ I am happy to work with Olahkarsa which contains creative young people. Olahkarsa is
                                able to translate what we expect. I am happy and satisfied with the deliverables of the
                                Olahkarsa team. ”
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-3 col-lg-1">
                                <img src="{{ asset('/img/leandingPage/testimonial/Avatar.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 col-lg-11">
                                <h4>
                                    Janne Siregar
                                </h4>
                                <p>
                                    Southeast Asia Regional Analyst Tropical Forest Alliance
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="splide__slide card justify-content-center align-items-center mx-md-3">
                        <div class="card-body">
                            <p class="card-text">
                                “ I am happy to work with Olahkarsa which contains creative young people. Olahkarsa is
                                able to translate what we expect. I am happy and satisfied with the deliverables of the
                                Olahkarsa team. ”
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-3 col-lg-1">
                                <img src="{{ asset('/img/leandingPage/testimonial/Avatar.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 col-lg-11">
                                <h4>
                                    Janne Siregar
                                </h4>
                                <p>
                                    Southeast Asia Regional Analyst Tropical Forest Alliance
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="splide__slide card justify-content-center align-items-center mx-md-3">
                        <div class="card-body">
                            <p class="card-text">
                                “ I am happy to work with Olahkarsa which contains creative young people. Olahkarsa is
                                able to translate what we expect. I am happy and satisfied with the deliverables of the
                                Olahkarsa team. ”
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-3 col-lg-1">
                                <img src="{{ asset('/img/leandingPage/testimonial/Avatar.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 col-lg-11">
                                <h4>
                                    Janne Siregar
                                </h4>
                                <p>
                                    Southeast Asia Regional Analyst Tropical Forest Alliance
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="splide__slide card justify-content-center align-items-center mx-md-3">
                        <div class="card-body">
                            <p class="card-text">
                                “ I am happy to work with Olahkarsa which contains creative young people. Olahkarsa is
                                able to translate what we expect. I am happy and satisfied with the deliverables of the
                                Olahkarsa team. ”
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-3 col-lg-1">
                                <img src="{{ asset('/img/leandingPage/testimonial/Avatar.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 col-lg-11">
                                <h4>
                                    Janne Siregar
                                </h4>
                                <p>
                                    Southeast Asia Regional Analyst Tropical Forest Alliance
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->

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

    <!-- ======= Media ======= -->
    <div id="media">
        <div class="container">
            <div class="row d-flex align-items-center p-3">
                <div class="col-md-6" data-aos="fade-right">
                    <h1>
                        Media coverage Olahkarsa
                    </h1>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>
                        Media coverage is used to refer to all blog articles, RSS feeds, video content or other types of
                        digital content (produced by individuals or organisations, other than your own company).
                    </p>
                </div>
            </div>

            <div class="card border rounded-3">
                <div class="container text-center">
                    <div class="row row-cols-3 row-cols-lg-6 g-2 g-lg-3 px-2 py-4 px-lg-4 py-lg-5 align-items-center">
                        <div class="col">
                            <div class="p-2">
                                <img src="{{ asset('/img/media/media1.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-2">
                                <img src="{{ asset('/img/media/media2.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-2">
                                <img src="{{ asset('/img/media/media3.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-2">
                                <img src="{{ asset('/img/media/media4.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-2">
                                <img src="{{ asset('/img/media/media5.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-2">
                                <img src="{{ asset('/img/media/media6.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <img src="{{ asset('/img/leandingPage/media/media.png') }}" class="img-fluid" alt="..."
                data-aos="fade-up"> --}}
        </div>
    </div>
    <!-- End Media -->
@endsection
