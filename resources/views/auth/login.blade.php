@extends('layout.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="card overflow-hidden">
        <div class="card-body row p-0">
            <div class="d-flex flex-wrap col-6 overflow-hidden aling-items-center justify-content-center" style="background-color: #a46fda;">
                <img src="{{ asset('images/bannerimg.png') }}" style="object-fit: contain" alt="">
            </div>
            <div class="col-6 px-5 d-flex flex-column align-items-center justify-content-center">
                <h1>Login</h1>
                <form action="">
                    <div class="my-3 d-flex flex-column align-middle justify-center">
                        <label for="inputEmail" class="col-form-label text-center">email</label>
                        <input type="text" class="form-control" id="inputEmail">
                    </div>
                    <div class="my-3 d-flex flex-column">
                        <label for="inputPassword" class="col-form-label text-center">password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <button class="btn btn-violet" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    const nav = document.querySelector(".navbar");
    const btnLogin = document.querySelector("#btnLogin");

    nav.classList.add("nav-scrolled");
    nav.classList.replace("navbar-dark", "navbar-light");
    btnLogin.classList.add("nav-scrolled");
</script>
@endsection
