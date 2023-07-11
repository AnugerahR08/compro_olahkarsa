@extends('user.layouts.main')

@section('title', 'Detail Event | Olahkarsa')

@section('content')

    <div id="devent">
        <!--- Hero --->
        <div class="container hero" style="margin-top: 6rem;">
            <img src="{{ asset('/img/event/event.png') }}" class="img-fluid rounded-4 shadow mb-5" alt="">
            <h1>
                Biodiversity for Sustainability of Life
            </h1>

            <div class="row deskripsi">
                <div class="col-8">
                    <div class="title d-flex align-items-center mb-3">
                        <div class="garis_verikal me-3" style="border-left: 8px #009dfb solid; height: 50px; width: 0px;"></div>
                        Deskripsi Event
                    </div>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
                <div class="col-4">
                    <div class="card rounded-4 px-5 py-3">
                        <div class="title">
                            Save the date
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
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

                        <div class="d-flex justify-content-center align-items-center">
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

                        <div class="d-flex justify-content-center align-items-center">
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
            </div>
        </div>
        <!--- End Hero --->

        <!--- form --->
        <div class="container form">
            <h1 class="mb-5">
                Form Registrasi
            </h1>

            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="name@example.com" value="" required>
                        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Telepon(whatsapp)</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Instanti</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Jabatan</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Apa yang ingin Anda Pelajari dengan mengikuti CSR Mini Class ini?</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Darimana Anda mendapatkan informasi CSR Mini Class ini?</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid.
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-primary px-5 py-3" type="submit">Register Now</button>
                </div>
            </form>
        </div>
        <!--- End form --->

        <!-- ======= News ======= -->
        <div class="container upevent" id="news" style="margin-top: 6rem ">
            <h1 class="mb-5 d-flex">
                <div class="garis_verikal me-3" style="border-left: 8px #009dfb solid; height: 50px; width: 0px;"></div>
                Upcoming Event
            </h1>
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
                        <a href="/">
                            <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                REGISTRASI
                            </button>
                        </a>
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
                        <a href="/">
                            <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                REGISTRASI
                            </button>
                        </a>
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
                        <a href="/">
                            <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                REGISTRASI
                            </button>
                        </a>
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
                                <a href="/">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
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
                                <a href="/">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
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
                                <a href="/">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- End News -->
    </div>

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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

@endsection
