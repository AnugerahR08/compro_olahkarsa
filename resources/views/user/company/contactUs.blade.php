@extends('user.layouts.main')

@section('title', 'About | Olahkarsa')

@section('content')

    <!--- Hero --->
    <div id="contact" class="py-5">
        <div class="container">
            <div class="card rounded-5 image">
                <div class="card z-1 rounded-5 w-50 px-5">
                    <h1 class="title">Get in Touch</h1>
                    <p class="text">Tell us how we can help you and we'll get in touch as soon as possible.</p>
                    <p class="contact">Contact Us</p>
                    <a href="">
                        <i class="bi bi-envelope me-2"></i>
                        contact@olahkarsa.com
                    </a>
                    <a href="">
                        <i class="bi bi-telephone me-2"></i>
                        022-75739487
                    </a>
                    <a href="">
                        <i class="bi bi-whatsapp me-2"></i>
                        +628112130130
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--- End Hero --->


    <!--- content --->
    <div class="container" id="content">
        <h1 class="text-center title">Get in Touch</h1>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <form class="row row-cols-2 g-4 needs-validation" novalidate>
                    <div class="col-12">
                        <h1>Select a Topic</h1>
                        <div class="form-floating mb-3">
                            <select class="form-select mb-3" id="floatingSelect" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Information *</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>

                    <hr class="w-100">

                    <div class="col-12">
                        <h1>The Topic</h1>
                        <div class="form-floating mb-3">
                            <select class="form-select mb-3" id="floatingSelect" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Select a topic *</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Province.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h1>Personal Data</h1>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="validationCustom01" placeholder="name" required>
                            <label for="validationCustom01" class="form-label">Name *</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Name.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3 ">
                            <input type="email" class="form-control" id="validationCustom01" placeholder="name@example.com" required>
                            <label for="validationCustom01" class="form-label">Email *</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Email.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text">
                                <input type="text" value="0" hidden>+62
                            </span>
                            <div class="form-floating">
                                <input type="tel" pattern="^\d{11}$" class="form-control mb-3" id="validationCustom01" placeholder="name@example.com" required>
                                <label for="validationCustom01" class="form-label">Telephone *</label>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid Telephone.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3">
                            <select class="form-select mb-3" id="floatingSelect" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Province *</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Province.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3">
                            <select class="form-select mb-3" id="floatingSelect" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">City *</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                            <label for="floatingTextarea2" class="form-label">Comments</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary p-3" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <img src="{{ asset('/img/company/contact/image2.svg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!--- End content --->

    <!--- content --->
    <div class="container" id="maps">
        <h1 class="text-center title">Discover our location</h1>
        <div class="card rounded-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.192975473828!2d107.6492203!3d-6.9444661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7328230ea3d%3A0xbb5e6bbd15e43421!2sPT%20Olahkarsa%20Inovasi%20Indonesia!5e0!3m2!1sid!2sid!4v1688953165774!5m2!1sid!2sid" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
        </div>
    </div>
    <!--- End content --->

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
