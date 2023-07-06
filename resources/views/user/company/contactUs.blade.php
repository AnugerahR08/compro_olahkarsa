@extends('user.layouts.main')

@section('title', 'About | Olahkarsa')

@section('content')

    <!--- Hero --->
    <div id="contact" class="py-5">
        <div class="container">
            <div class="card rounded-5 image">
                <div class="card rounded-5 w-50 px-5">
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
        <div class="row">
            <div class="col">
                <form class="row row-cols-2 g-4 needs-validation" novalidate>
                    <div class="col-12">
                        <h1>Select a Topic</h1>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" required>
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
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" required>
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
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationCustom01" placeholder="name@example.com" required>
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
                        <div class="form-floating ">
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
                            <span class="input-group-text">+62</span>
                            <div class="form-floating ">
                                <input type="number" class="form-control" id="validationCustom01" placeholder="name@example.com" required>
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
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" required>
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
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" required>
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
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                            <label for="floatingTextarea2" class="form-label">Comments</label>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary p-3" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <img src="{{ asset('/img/company/contact/image2.svg') }}" alt="">
            </div>
        </div>
    </div>
    <!--- End content --->

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
