@extends('user.layouts.main')

@section('title', 'CSR School | Olahkarsa')

@section('content')
    <!-- ======= Hero ======= -->
    <div id="judul">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start p-3">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>
                        Take the first step towards becoming a change-maker.
                    </h1>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <p>
                        We assist companies in conducting research assisted by several teams that helps companies in
                        conducting research and development in the field of CSR
                    </p>
                    <button class="btn btn-primary p-2 px-3">See Our Mentor</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- ======= Image ======= -->
    <div id="imgsch" data-aos="fade-up">
        <div class="container">
            <div class="image rounded">
                <div class="card p-2 p-lg-4">
                    <div class="img mb-2">
                        <img src="{{ asset('/img/services/csrSch/image/icon.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="title mb-lg-2">
                        Join Our CSR School Program
                    </div>
                    <div class="text">
                        Ready to make a real difference in the world? Join our CSR School program and embark on a
                        transformative journey
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image -->

    <!-- ======= Mini Class ======= -->
    <div id="okmedia" class="miniclass">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center" data-aos="fade-up">
                <div class="title mini text-center mb-lg-5">
                    <h1>
                        Unlock your potential with join our CSR scholl and training
                    </h1>
                    <p>
                        Take advantage of our comprehensive curriculum and cutting-edge training to drive sustainable change
                        and
                        create positive societal impacts.
                    </p>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center" data-aos="zoom-in">
                <input class="check" type="checkbox" id="checkbox_toggle">
                <div class="checkbox">
                    <label for="checkbox_toggle nav-pills" class="slide" id="pills-tab" role="tablist">
                        <label for="checkbox_toggle" class="toggle"></label>
                        <label for="checkbox_toggle" class="text1" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Mini Class
                        </label>
                        <label for="checkbox_toggle" class="text2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Patnership Training
                        </label>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mini Class -->

    <div class="tab-content" id="pills-tabContent" data-aos="fade-up">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <!-- ======= CTA ======= -->
            <div id="ctaa" data-aos="fade-up">
                <div class="container">
                    <div class="card rounded-4 text-light text-center p-5 justify-conten-center align-items-center">
                        <h1>
                            Let’s get our CSR mini class!
                        </h1>
                        <p>
                            Learn the knowledge and skills you need to drive sustainable change, increase stakeholder
                            engagement, and make a positive impact on society.
                        </p>
                        <button class="btn btn-light text-primary p-2 px-4" style="width: max-content">
                            See Schedule
                        </button>
                    </div>
                </div>
            </div>
            <!-- End CTA -->

            <!-- ======= Class ======= -->
            <div id="class">
                <div class="container">
                    <h1 data-aos="fade-up">
                        Olahkarsa Mini Class
                    </h1>
                    <div class="row g-4 card-group mt-md-3">
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <div class="image d-flex justify-content-start align-items-end rounded-top-4 pb-3 ps-3" style="background-image: url(/img/services/csrSch/class/imgP.svg)">
                                    <label class="rounded text-light py-2 px-3">Onsite - Kota Bandung</label>
                                </div>
                                <div class="card-body p-3">
                                    <div style="color: #606060;">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        (415 Reviews)
                                    </div>
                                    <div class="title">
                                        Measuring CSR Program with Social Return on Investment (SROI)
                                    </div>
                                </div>
                                <div class="card-footer harga bg-transparent text-primary p-3">
                                    Rp.6.000.000
                                </div>
                                <a href="/CSR_Mini_Class">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/class/Image3.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="card-body p-3">
                                    <div style="color: #606060;">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        (415 Reviews)
                                    </div>
                                    <div class="title">
                                        Social Issue Management & Multi Stakeholder Participation
                                    </div>
                                </div>
                                <div class="card-footer harga bg-transparent text-primary p-3">
                                    Rp.6.000.000
                                </div>
                                <a href="/CSR_Mini_Class">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/class/Image.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="card-body p-3">
                                    <div style="color: #606060;">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        (415 Reviews)
                                    </div>
                                    <div class="title">
                                        Penerapan Program CSR berbasis ISO 26000 & Creating Shared Value
                                    </div>
                                </div>
                                <div class="card-footer harga bg-transparent text-primary p-3">
                                    Rp.6.000.000
                                </div>
                                <a href="/CSR_Mini_Class">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/class/Image4.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="card-body p-3">
                                    <div style="color: #606060;">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        (415 Reviews)
                                    </div>
                                    <div class="title">
                                        Perencanaan Program CSR & Integrated CSR Communication
                                    </div>
                                </div>
                                <div class="card-footer harga bg-transparent text-primary p-3">
                                    Rp.6.000.000
                                </div>
                                <a href="/CSR_Mini_Class">
                                    <button type="button" class="btn btn-primary rounded-top-0 rounded-bottom-4 py-3 w-100">
                                        REGISTRASI
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Class -->
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <!-- ======= CTA ======= -->
            <div id="ctaa" data-aos="fade-up">
                <div class="container">
                    <div class="card rounded-4 text-light text-center p-5 justify-conten-center align-items-center">
                        <h1>
                            Enhance Your CSR Impact with Partnership Training
                        </h1>
                        <p>
                            Learn the knowledge and skills you need to drive sustainable change, increase stakeholder
                            engagement, and make a positive impact on society.
                        </p>
                        <button class="btn btn-light text-primary p-2 px-4" style="width: max-content">
                            See Schedule
                        </button>
                    </div>
                </div>
            </div>
            <!-- End CTA -->

            <!-- ======= Class ======= -->
            <div id="class">
                <div class="container">
                    <h1 data-aos="fade-up">
                        Olahkarsa Curiculum
                    </h1>
                    <div class="row g-4 card-group mt-md-3">
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/curiculum/Img.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="title p-3">
                                    ISO 26000
                                </div>
                                <div class="text p-3">
                                    ISO 26000 is an international standard, which was developed to provide guidance on how
                                    to behave in a socially responsible way. This standard is ISO 26000 is an international
                                    standard, which was developed to provide g
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/curiculum/Img.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="title p-3">
                                    ISO 26000
                                </div>
                                <div class="text p-3">
                                    ISO 26000 is an international standard, which was developed to provide guidance on how
                                    to behave in a socially responsible way. This standard is ISO 26000 is an international
                                    standard, which was developed to provide g
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/curiculum/Img.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="title p-3">
                                    ISO 26000
                                </div>
                                <div class="text p-3">
                                    ISO 26000 is an international standard, which was developed to provide guidance on how
                                    to behave in a socially responsible way. This standard is ISO 26000 is an international
                                    standard, which was developed to provide g
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/curiculum/Img.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="title p-3">
                                    ISO 26000
                                </div>
                                <div class="text p-3">
                                    ISO 26000 is an international standard, which was developed to provide guidance on how
                                    to behave in a socially responsible way. This standard is ISO 26000 is an international
                                    standard, which was developed to provide g
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/curiculum/Img.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="title p-3">
                                    ISO 26000
                                </div>
                                <div class="text p-3">
                                    ISO 26000 is an international standard, which was developed to provide guidance on how
                                    to behave in a socially responsible way. This standard is ISO 26000 is an international
                                    standard, which was developed to provide g
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="card rounded-4">
                                <img src="{{ asset('/img/services/csrSch/curiculum/Img.svg') }}" class="img-fluid rounded-top-4" alt="">
                                <div class="title p-3">
                                    ISO 26000
                                </div>
                                <div class="text p-3">
                                    ISO 26000 is an international standard, which was developed to provide guidance on how
                                    to behave in a socially responsible way. This standard is ISO 26000 is an international
                                    standard, which was developed to provide g
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Class -->
        </div>
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
                <button type="button" class="btn btn-outline-light py-2 mb-3">Leanrn more to know</button>
            </div>
        </div>
    </div>
    <!-- End CTA 2 -->


@endsection
