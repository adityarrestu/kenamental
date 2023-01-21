@extends('layout.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="col-lg-10 col-xl-9 card flex-row overflow-hidden">
        <img src="{{ asset('images/bannerimg.png') }}" class="col-6 d-none d-md-flex" style="background-color: #a46fda; object-fit: contain" alt="conseling-online">

        <div class="card-body col">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h3 class="my-4 fw-bold">Kena Mental.com</h3>
                    <h4 class="text-center mb-4">
                        Login akun
                    </h4>
                    <form class="d-flex flex-column" method="POST" action="/users/authenticate">
                        @csrf

                        <div class="form-input mb-3">
                            <label for="inputEmail" class="mb-2 mx-2">email</label>
                            <input type="text" name="email" class="form-control rounded-pill" id="inputEmail" placeholder="Masukkan email"
                                value="{{old('email')}}" />

                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-input mb-3">
                            <label for="inputPassword" class="mb-2 mx-2">kata sandi</label>
                            <input type="password" name="password" class="form-control rounded-pill" id="inputPassword" placeholder="Masukkan kata sandi"
                                value="{{old('password')}}"/>

                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <a
                            href=""
                            class="text-muted text-decoration-none text-center mb-3"
                        >Lupa kata sandi</a>
                        <a
                            href=""
                            class="btn btn-violet rounded-pill w-100 mb-3"
                        >LOGIN</a>
                        <a
                            href=""
                            class="btn btn-outline-dark rounded-pill w-100 mb-3"
                        ><i class="fa-brands fa-google mx-2"></i>Login dengan Google</a>
                        <p class="my-3">Belum memiliki akun? <a  href="/register" class="text-decoration-none text-muted fw-bold mx-2">Buat akun</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
