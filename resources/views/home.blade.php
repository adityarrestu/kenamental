@extends('layout.app')

@section('content')
    <div class="mb-5">
        @include('partials._hero')
        @include('partials._service')
        @include('partials._psikolog')
        @include('partials._testimoni')
    </div>
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
