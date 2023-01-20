<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kena Mental</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Owl Carousel --}}
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" >
        <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" >

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .navbar {
                transition: all 0.5s;
            }

            .nav-scrolled {
                background-color: #fff;
                color: #272727;
            }

            #btnLogin.nav-scrolled {
                background-color: #a46fda;
                color: #fff;
                transition: all 0.5s;
            }

            #btn-violet {
                background-color: #a46fda;
                color:#fff;
                transition: 0.2s;
            }

            #btn-violet:hover {
                background-color: #855aaf;
            }

            .btns{
                display: table;
                margin: 30px auto;
            }
            .customNextBtn, .customPreviousBtn{
                float: left;
                background: #a46fda;
                color: #fff;
                padding: 10px;
                cursor: pointer;
            }
        </style>
        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
              <div class="container">
                <a class="navbar-brand" href="#">Kena Mental</a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div
                  class="collapse navbar-collapse justify-content-end"
                  id="navbarSupportedContent"
                >
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2">
                      <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item px-2">
                      <a class="nav-link" href="#">Tes Mental</a>
                    </li>
                    <li class="nav-item px-2">
                      <a class="nav-link" href="#psikolog">Psikolog</a>
                    </li>
                    <li class="nav-item px-2">
                      <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                  </ul>
                  <button
                    id="btnLogin"
                    class="btn btn-light rounded-pill px-4"
                    type="submit"
                  >
                    Login
                  </button>
                </div>
              </div>
            </nav>
          </header>

          <main>
            <section
              class="p-5 mb-4 text-light rounded-3"
              style="background-color: #a46fda"
            >
                <div class="container d-flex flex-row">
                    <div class="container-fluid py-5">
                    <h1 class="display-3">
                        Kami Peduli dengan
                        <span class="fw-bold">Kesehatan Mental Anda</span>
                    </h1>
                    <p class="col-md-8 fs-4">
                        Konsultasikan dirimu bersama Psikolog Klinis Terbaik!
                    </p>
                    <button
                        class="btn btn-light btn-lg fw-bold rounded-pill px-4 mt-4"
                        style="color: #a46fda"
                        type="button"
                    >
                        Jadwalkan Konsultasi
                    </button>
                    </div>
                    <img src="{{ asset('images/bannerimg.png') }}" alt="" />
                </div>
            </section>

            <section id="layanan" class="container-fluid mt-4 px-0 py-5">
              <h1 class="text-center fw-bold">Layanan Kami</h1>

              <div class="d-flex flex-wrap align-items-center justify-content-center">
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Konseling Online</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" id="btn-violet" class="btn">Jadwalkan Konseling</a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Tanya Psikolog</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" id="btn-violet" class="btn">Tanya Sekarang</a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Tes Mental</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" id="btn-violet" class="btn">Tes Sekarang</a>
                    </div>
                </div>
              </div>
            </section>

            <section id="psikolog" class="container py-5">
                <div class="row">
                    <div class="d-flex flex-column col-4">
                        <h1 class="fw-bold">Profil Psikolog</h1>
                        <p class="fs-4">Ayo kenali Psikolog Klinis Terbaik! Konsultasikan kesehatan mental anda bersama</p>
                        <div class="owl-nav">
                            <div class="customNextBtn rounded-circle px-3 mx-2">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="customPreviousBtn rounded-circle px-3 mx-2">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col overflow-hidden">
                        <div class="owl-carousel">
                            <div class="card" style="width: 15rem">
                                <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">1</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make
                                        up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="width: 15rem">
                                <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">2</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make
                                        up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="width: 15rem">
                                <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">3</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make
                                        up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/all.min.js') }}"></script>

        <script>
            const nav = document.querySelector(".navbar");
            const btnLogin = document.querySelector("#btnLogin");

            window.addEventListener("scroll", () => {
                if (window.scrollY >= 100) {
                    nav.classList.add("nav-scrolled");
                    nav.classList.replace("navbar-dark", "navbar-light");
                    btnLogin.classList.add("nav-scrolled");
                } else if (window.scrollY < 100) {
                    nav.classList.remove("nav-scrolled");
                    nav.classList.replace("navbar-light", "navbar-dark");
                    btnLogin.classList.remove("nav-scrolled");
                }
            });

            $(document).ready(function () {
                let owl = $('.owl-carousel');
                owl.owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 3,
                        },
                        1000: {
                            items: 3,
                        },
                    },
                });

                // Custom Button
                $('.customNextBtn').click(function() {
                    owl.trigger('next.owl.carousel');
                });
                $('.customPreviousBtn').click(function() {
                    owl.trigger('prev.owl.carousel');
                });
            });
        </script>

    </body>
</html>
