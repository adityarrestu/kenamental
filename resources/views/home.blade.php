@extends('layout.app')

@section('style')
    <style>
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
    </style>
@endsection

@section('content')
    @include('partials._hero')
    @include('partials._service')
    @include('partials._psikolog')
    @include('partials._testimoni')
@endsection

@section('script')
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
    </script>
@endsection
