@extends('user.layouts.main')

@section('title', 'CSR mini class | Olahkarsa')

@section('content')

    <div id="miniclass">

        <!-- ======= Hero ======= -->
        <div id="judul">
            <div class="container">
                <div class="row align-items-center text-center text-lg-start p-3">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h1>
                            Measuring CSR Program with Social Return on Investment (SROI)
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>
                        <button class="btn btn-primary p-2 px-3">Register Now</button>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="{{ asset('/img/services/csrSch/class/image.png') }}" class="img-fluid rounded-4" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <div class="container about">
            <h1 class="mb-5">
                About CSR School Mini Class
            </h1>

            <div class="d-flex justify-content-center align-items-center" data-aos="zoom-in">
                <input class="check" type="checkbox" id="checkbox_toggle">
                <div class="checkbox">
                    <label for="checkbox_toggle nav-pills" class="slide" id="pills-tab" role="tablist">
                        <label for="checkbox_toggle" class="toggle"></label>
                        <label for="checkbox_toggle" class="text1 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Mini Class
                        </label>
                        <label for="checkbox_toggle" class="text2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Patnership Training
                        </label>
                    </label>
                </div>
            </div>

            <div class="row tabs" style="margin-top: 6rem;">
                <div class="col-8">
                    <div class="tab-content" id="pills-tabContent" data-aos="zoom-in">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="text">
                                Keberhasilan suatu program CSR tentunya dapat diukur dengan mengetahui manfaat suatu program di masyarakat. Metode yang dapat digunakan untuk mengukur dampak sosial dari program CSR adalah Social Return On Investment (SROI). Pengukuran program CSR dapat membantu perusahaan untuk memahami bagaimana mengelola nilai sosial, lingkungan dan ekonomi yang dihasilkannya. Dengan menggunakan SROI, perusahaan mengetahui nilai dampak positif dari program CSR khususnya bagi masyarakat dan efektivitas investasi sosial yang telah dikeluarkan oleh perusahaan. Kelas ini akan membahas penjelasan teori dan praktek dalam menghitung SROI menggunakan dua jenis, evaluative dan forecast.
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="border-start border-5">
                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Pendahuluan SROI
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Prinsip Pengukuran SROI
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Ruang lingkup & identifikasi pemangku kepentingan dalam penghitungan SROI
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Pemetaan dampak
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Pengukuran & penilaian dampak
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Penetapan dampak
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Penghitungan SROI
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div class="circle me-5 position-relative" style="background-color: #009dfb; width: 29px; height: 29px; border-radius: 50%; transform: translateX(calc(-50% - 2px))">
                                    </div>

                                    <div class="card items p-4">
                                        Studi kasus
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card rounded-4 p-4">
                        <div class="title mb-2">
                            Measuring CSR Program with Social Return on Investment (SROI)
                        </div>
                        <div class="row mb-3" style="color: #606060; font-size: 18px;">
                            <div class="col">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="col text-end">
                                Rp. 6.000.000
                            </div>
                        </div>
                        <div class="title2 mb-2">
                            Schedule
                        </div>
                        <div class="date mb-2">
                            <i class="bi bi-calendar-date-fill"></i>
                            7 - 8 Desember 2023
                        </div>

                        <div class="status mb-2">
                            <i class="bi bi-box-seam-fill"></i>
                            offline
                        </div>

                        <div class="maps mb-2">
                            <i class="bi bi-geo-alt-fill"></i>
                            Kota Bandung, Jawa Barat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
