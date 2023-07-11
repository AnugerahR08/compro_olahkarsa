@extends('user.layouts.main')

@section('title', 'About | Olahkarsa')

@section('srapp')
    <img class="me-3" alt="Bootstrap" height="50" src="{{ asset('/img/asset/logo/srapp.png') }}" width="100" />
    <div class="garis_verikal me-3" style="border-left: 2px #6C757D80 solid; height: 50px; width: 0px;"></div>
@endsection

@section('content')

    <div id="srapp">
        <!--- Hero --->
        <div class="container hero">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <h1 class="mb-3">
                        Lebih Mudah dan Fleksibel​
                    </h1>
                    <p class="mb-3">
                        SR App adalah Aplikasi untuk melakukan manajemen dan monitoring program CSR secara lebih efekatif efisien dan terintegrasi​
                    </p>
                    <button class="btn btn-primary px-5 py-2">Try Now</button>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/product/srapp/hero.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!--- End Hero --->

        <!--- Content --->
        <div class="container content">
            <div class="text-center px-3">
                <div class="title">
                    Memberikan Solusi Manajemen dan Monitoring
                </div>
                <div class="teks">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-5 mt-4">
                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Program Management
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon2.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Activity Management
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon3.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Publication Management
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon4.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Stakeholder Management
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon5.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Beneficiaries Management
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon6.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Subsidiary Management
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon7.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Budget Management​
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon8.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            GIS & Analytic
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="image mb-2">
                            <img src="{{ asset('/img/product/srapp/icon/icon9.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="title mb-2">
                            Automatic Reporting
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-primary py-3 px-5">
                    Try Now
                </button>
            </div>
        </div>
        <!--- End Content --->

        <!--- cta --->
        <div class="container cta">
            <div class="card image rounded-4">
                <div class="row justify-content-center align-items-center px-5">
                    <div class="col-md-6">
                        <img src="{{ asset('/img/product/srapp/cta/cta.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 text-light">
                        <h1 class="mb-5">
                            Masalah yang Dihadapi Saat Implementasi Program TJSL​dengan Proses Konvensional​
                        </h1>
                        <div class="row row-cols-2 gy-4 align-items-center mb-3">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/cta/cta1.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10">
                                <div class="text">
                                    Proses pembuatan laporan program TJSL membutuhkan​ waktu yang cukup lama​
                                </div>
                            </div>

                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/cta/cta2.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10">
                                <div class="text">
                                    Program TJSL tidak bisa dipantau secara day to day​ sehingga menyebabkan program tidak berkelanjutan​
                                </div>
                            </div>

                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/cta/cta3.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10">
                                <div class="text">
                                    Tidak adanya pengarsipan yang baik sehingga berakibat​ pada hilangnya data yang berkaitan dengan program TJSL​
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- End cta --->

        <!--- Keuntungan --->
        <div class="container keuntungan">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-8">
                    <h1 class="mb-3">
                        Apa keuntungan yang didapatkan
                    </h1>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    </p>
                    <div class="row row-cols-2 g-0">
                        <div class="row align-items-center mb-3">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/ceklis.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 text">
                                Mempercepat dalam proses pembuatan laporan program TJSL​
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/ceklis.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 text">
                                Mengamankan data yang berkaitan dengan program TJSL​
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/ceklis.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 text">
                                Mengefektifkan proses pelaksanaan implementasi program TJSL​
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/ceklis.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 text">
                                Menghemat biaya pelaksanaan monitoring dan manajemen program TJSL​
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/ceklis.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 text">
                                Membantu perusahaan dalam mengambil keputusan strategis terhadap program TJSL secara lebih cepat​
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2 d-flex justify-content-center">
                                <img src="{{ asset('/img/product/srapp/ceklis.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 text">
                                Meningkatkan produktifitas karyawan dalam pelaksanaan program TJSL​
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img src="{{ asset('/img/product/srapp/cta/cta4.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!--- End Keuntungan --->

        <!--- cta2 --->
        <div class="container cta2">
            <div class="row nav-pills border-none" id="pills-tab" role="tablist">
                <div class="col" role="presentation">
                    <div class="log active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div class="d-flex justify-content-center">
                            <svg class="icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50 9.375C41.9652 9.375 34.1107 11.7576 27.43 16.2215C20.7492 20.6855 15.5422 27.0302 12.4674 34.4535C9.3926 41.8767 8.58809 50.0451 10.1556 57.9255C11.7231 65.806 15.5923 73.0447 21.2738 78.7262C26.9553 84.4077 34.194 88.2769 42.0745 89.8444C49.955 91.4119 58.1233 90.6074 65.5465 87.5326C72.9698 84.4578 79.3145 79.2508 83.7785 72.57C88.2424 65.8893 90.625 58.0349 90.625 50C90.6136 39.2291 86.3299 28.9026 78.7137 21.2863C71.0975 13.6701 60.7709 9.38637 50 9.375ZM71.875 53.125H50C49.1712 53.125 48.3764 52.7958 47.7903 52.2097C47.2043 51.6237 46.875 50.8288 46.875 50V28.125C46.875 27.2962 47.2043 26.5013 47.7903 25.9153C48.3764 25.3292 49.1712 25 50 25C50.8288 25 51.6237 25.3292 52.2097 25.9153C52.7958 26.5013 53.125 27.2962 53.125 28.125V46.875H71.875C72.7038 46.875 73.4987 47.2042 74.0847 47.7903C74.6708 48.3763 75 49.1712 75 50C75 50.8288 74.6708 51.6237 74.0847 52.2097C73.4987 52.7958 72.7038 53.125 71.875 53.125Z" fill="#A6A6A6" />
                            </svg>
                        </div>
                        <div class="text d-flex justify-content-center px-4">
                            Pengolahan Data Otomatis
                        </div>
                    </div>
                </div>
                <div class="col" role="presentation">
                    <div class="log" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <div class="d-flex justify-content-center">
                            <svg class="icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 10C27.3478 10 24.8043 11.0536 22.9289 12.9289C21.0536 14.8043 20 17.3478 20 20V80C20 82.6522 21.0536 85.1957 22.9289 87.0711C24.8043 88.9464 27.3478 90 30 90H70C72.6522 90 75.1957 88.9464 77.0711 87.0711C78.9464 85.1957 80 82.6522 80 80V37.07C79.9994 34.4181 78.9455 31.8749 77.07 30L60 12.93C58.1251 11.0545 55.582 10.0006 52.93 10H30ZM40 60C40 58.6739 39.4732 57.4021 38.5355 56.4645C37.5979 55.5268 36.3261 55 35 55C33.6739 55 32.4021 55.5268 31.4645 56.4645C30.5268 57.4021 30 58.6739 30 60V75C30 76.3261 30.5268 77.5979 31.4645 78.5355C32.4021 79.4732 33.6739 80 35 80C36.3261 80 37.5979 79.4732 38.5355 78.5355C39.4732 77.5979 40 76.3261 40 75V60ZM50 45C51.3261 45 52.5979 45.5268 53.5355 46.4645C54.4732 47.4021 55 48.6739 55 50V75C55 76.3261 54.4732 77.5979 53.5355 78.5355C52.5979 79.4732 51.3261 80 50 80C48.6739 80 47.4021 79.4732 46.4645 78.5355C45.5268 77.5979 45 76.3261 45 75V50C45 48.6739 45.5268 47.4021 46.4645 46.4645C47.4021 45.5268 48.6739 45 50 45ZM70 40C70 38.6739 69.4732 37.4021 68.5355 36.4645C67.5979 35.5268 66.3261 35 65 35C63.6739 35 62.4021 35.5268 61.4645 36.4645C60.5268 37.4021 60 38.6739 60 40V75C60 76.3261 60.5268 77.5979 61.4645 78.5355C62.4021 79.4732 63.6739 80 65 80C66.3261 80 67.5979 79.4732 68.5355 78.5355C69.4732 77.5979 70 76.3261 70 75V40Z" fill="#A6A6A6" />
                            </svg>
                        </div>
                        <div class="text d-flex justify-content-center px-4">
                            Reporting Otomatis
                        </div>
                    </div>
                </div>
                <div class="col" role="presentation">
                    <div class="log" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <div class="d-flex justify-content-center">
                            <svg class="icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M60 5C59.1 5 58.2 5.035 57.31 5.1C56.9824 5.12495 56.6628 5.21419 56.3697 5.36263C56.0765 5.51107 55.8155 5.71579 55.6014 5.96512C55.3874 6.21444 55.2245 6.50349 55.1222 6.81574C55.0199 7.128 54.9801 7.45735 55.005 7.785C55.03 8.11265 55.1192 8.43217 55.2676 8.72533C55.4161 9.01849 55.6208 9.27954 55.8701 9.49358C56.1194 9.70762 56.4085 9.87046 56.7207 9.97279C57.033 10.0751 57.3624 10.115 57.69 10.09C62.007 9.75596 66.3452 10.3604 70.4064 11.8617C74.4677 13.363 78.1559 15.7257 81.2176 18.7874C84.2793 21.8491 86.642 25.5373 88.1433 29.5986C89.6446 33.6599 90.249 37.998 89.915 42.315C89.8837 42.6459 89.9187 42.9796 90.018 43.2968C90.1172 43.614 90.2787 43.9081 90.493 44.1622C90.7073 44.4162 90.9701 44.6249 91.266 44.7762C91.5619 44.9275 91.885 45.0182 92.2164 45.0431C92.5478 45.0681 92.8808 45.0267 93.196 44.9214C93.5112 44.8161 93.8023 44.649 94.0522 44.4299C94.302 44.2108 94.5057 43.9441 94.6513 43.6453C94.7969 43.3466 94.8814 43.0218 94.9 42.69C95.2707 37.881 94.6434 33.0473 93.0576 28.4923C91.4718 23.9372 88.9616 19.7591 85.6845 16.22C82.4075 12.681 78.4343 9.85753 74.0144 7.92673C69.5945 5.99593 64.8232 4.99951 60 5ZM60 15C59.065 15 58.135 15.05 57.225 15.15C56.8987 15.1861 56.5826 15.2861 56.295 15.4444C56.0073 15.6026 55.7536 15.816 55.5484 16.0723C55.1339 16.5899 54.9421 17.2509 55.015 17.91C55.0879 18.5691 55.4197 19.1722 55.9373 19.5866C56.4549 20.0011 57.1159 20.1929 57.775 20.12C60.7584 19.7862 63.7787 20.1282 66.6119 21.1208C69.445 22.1134 72.0184 23.7311 74.1412 25.8538C76.2639 27.9766 77.8816 30.55 78.8742 33.3831C79.8668 36.2163 80.2088 39.2366 79.875 42.22C79.8389 42.5467 79.8675 42.8772 79.9591 43.1929C80.0508 43.5085 80.2037 43.803 80.4091 44.0595C80.6146 44.316 80.8685 44.5295 81.1565 44.6879C81.4445 44.8463 81.7608 44.9464 82.0875 44.9825C82.7472 45.0554 83.4089 44.8633 83.927 44.4484C84.445 44.0335 84.7771 43.4297 84.85 42.77C85.2397 39.2746 84.8875 35.7362 83.8163 32.3862C82.7452 29.0362 80.9793 25.9499 78.6339 23.329C76.2886 20.708 73.4166 18.6114 70.2057 17.1762C66.9947 15.741 63.5171 14.9994 60 15ZM60 25C58.975 25 57.975 25.1 57 25.3C56.3502 25.4326 55.7797 25.8179 55.414 26.3711C55.0483 26.9244 54.9174 27.6002 55.05 28.25C55.1826 28.8998 55.5679 29.4703 56.1211 29.836C56.6744 30.2017 57.3502 30.3326 58 30.2C59.6199 29.8689 61.2967 29.9446 62.8802 30.4204C64.4637 30.8962 65.9045 31.7572 67.0736 32.9264C68.2428 34.0955 69.1038 35.5363 69.5796 37.1198C70.0554 38.7033 70.1311 40.3801 69.8 42C69.7343 42.3217 69.7327 42.6533 69.7952 42.9756C69.8576 43.298 69.983 43.6049 70.164 43.8789C70.3451 44.1528 70.5784 44.3884 70.8505 44.5722C71.1226 44.7559 71.4283 44.8843 71.75 44.95C72.0717 45.0157 72.4033 45.0173 72.7256 44.9548C73.048 44.8924 73.3549 44.767 73.6289 44.586C74.1821 44.2203 74.5674 43.6498 74.7 43C75.1449 40.8204 75.0995 38.5691 74.5669 36.4092C74.0344 34.2494 73.0281 32.235 71.621 30.512C70.2139 28.789 68.4412 27.4005 66.4313 26.4472C64.4214 25.4939 62.2246 24.9995 60 25ZM50.4 10.005H17.5C15.5109 10.005 13.6032 10.7952 12.1967 12.2017C10.7902 13.6082 10 15.5159 10 17.505V67.505C10 69.4941 10.7902 71.4018 12.1967 72.8083C13.6032 74.2148 15.5109 75.005 17.5 75.005H35V85.005H27.5C26.837 85.005 26.2011 85.2684 25.7322 85.7372C25.2634 86.2061 25 86.842 25 87.505C25 88.168 25.2634 88.8039 25.7322 89.2728C26.2011 89.7416 26.837 90.005 27.5 90.005H72.5C73.163 90.005 73.7989 89.7416 74.2678 89.2728C74.7366 88.8039 75 88.168 75 87.505C75 86.842 74.7366 86.2061 74.2678 85.7372C73.7989 85.2684 73.163 85.005 72.5 85.005H65V75.005H82.5C84.4891 75.005 86.3968 74.2148 87.8033 72.8083C89.2098 71.4018 90 69.4941 90 67.505V49.605C89.0326 49.2775 88.1426 48.7551 87.385 48.07C86.0034 49.3223 84.2039 50.0135 82.3392 50.0079C80.4745 50.0024 78.6791 49.3005 77.305 48.04C76.5718 48.7111 75.7123 49.2296 74.7766 49.5652C73.8409 49.9008 72.8478 50.0468 71.8552 49.9947C70.8625 49.9425 69.8902 49.6934 68.9948 49.2616C68.0994 48.8299 67.2989 48.2242 66.64 47.48C64.7325 49.1647 62.2543 50.0587 59.7106 49.9799C57.1668 49.901 54.7488 48.8553 52.9493 47.0557C51.1497 45.2562 50.104 42.8382 50.0251 40.2944C49.9463 37.7507 50.8403 35.2725 52.525 33.365C51.7808 32.7061 51.1751 31.9056 50.7434 31.0102C50.3116 30.1149 50.0625 29.1425 50.0103 28.1498C49.9582 27.1572 50.1042 26.1641 50.4398 25.2284C50.7754 24.2928 51.2939 23.4332 51.965 22.7C50.7059 21.3262 50.0049 19.5318 49.9994 17.6683C49.9938 15.8048 50.6841 14.0063 51.935 12.625C51.2453 11.8653 50.7194 10.9718 50.39 10L50.4 10.005ZM60 75.005V85.005H40V75.005H60ZM65 40C65 41.3261 64.4732 42.5979 63.5355 43.5355C62.5979 44.4732 61.3261 45 60 45C58.6739 45 57.4021 44.4732 56.4645 43.5355C55.5268 42.5979 55 41.3261 55 40C55 38.6739 55.5268 37.4021 56.4645 36.4645C57.4021 35.5268 58.6739 35 60 35C61.3261 35 62.5979 35.5268 63.5355 36.4645C64.4732 37.4021 65 38.6739 65 40Z" fill="#A6A6A6" />
                            </svg>
                        </div>
                        <div class="text d-flex justify-content-center px-4">
                            Pemantauan/Tracking Program TJSL
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="pcc d-flex justify-content-start mt-5">
                        <div class="panah text-light text-center rounded-top-pill border-none shadow-none">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="card image rounded-4 text-light border-none shadow-none">
                        <div class="row pt-5">
                            <div class="col">
                                <img src="{{ asset('/img/product/srapp/cta2/cta.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col p-3 d-flex align-items-center">
                                <h1 class="mb-5">
                                    Untuk Membantu Perusahaan dalam Mengambil Keputusan Strategis Terkait Program TJSL
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="pcc d-flex justify-content-center mt-5">
                        <div class="panah text-light text-center rounded-top-pill">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="card image rounded-4 text-light">
                        <div class="row pt-5">
                            <div class="col">
                                <img src="{{ asset('/img/product/srapp/cta2/cta.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col p-3">
                                <h1 class="mb-5">
                                    Untuk Mempercepat dalam Proses Pembuatan Laporan yang​ Berkaitan dengan Program TJSL​
                                </h1>
                                <div class="row align-items-center mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <img src="{{ asset('/img/product/srapp/ceklis2.svg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11 teks">
                                        Laporan Program
                                    </div>
                                </div>

                                <div class="row align-items-center mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <img src="{{ asset('/img/product/srapp/ceklis2.svg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11 teks">
                                        Laporan Program
                                    </div>
                                </div>

                                <div class="row align-items-center mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <img src="{{ asset('/img/product/srapp/ceklis2.svg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11 teks">
                                        Laporan Program
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <div class="pcc d-flex justify-content-end mt-5">
                        <div class="panah text-light text-center rounded-top-pill">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="card image rounded-4 text-light">
                        <div class="row pt-5">
                            <div class="col">
                                <img src="{{ asset('/img/product/srapp/cta2/cta.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col p-3">
                                <h1 class="mb-5">
                                    Untuk Mempercepat dalam Proses Pembuatan Laporan yang​ Berkaitan dengan Program TJSL​
                                </h1>
                                <div class="row align-items-center mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <img src="{{ asset('/img/product/srapp/ceklis2.svg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11 teks">
                                        Laporan Program
                                    </div>
                                </div>

                                <div class="row align-items-center mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <img src="{{ asset('/img/product/srapp/ceklis2.svg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11 teks">
                                        Laporan Program
                                    </div>
                                </div>

                                <div class="row align-items-center mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <img src="{{ asset('/img/product/srapp/ceklis2.svg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11 teks">
                                        Laporan Program
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Keuntungan --->
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
@endsection
