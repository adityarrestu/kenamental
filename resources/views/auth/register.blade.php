@extends('layout.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center py-5" style="min-height: 100vh">
    <div class="col-lg-5 col-xl-5 card px-5 py-4 mt-4">
        <h4 class="text-center fw-bold mb-4">
            Buat akun
        </h4>
        <form class="d-flex flex-column" method="POST" action="/users/register">
            @csrf
            <div class="form-input mb-3">
                <label for="inputNama" class="mb-2 mx-2">nama (bisa menggunakan inisial)</label>
                <input type="text" name="name" class="form-control rounded-pill" id="inputNama" placeholder="Masukkan nama"
                    value="{{old('name')}}" />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label for="inputWhatsapp" class="mb-2 mx-2">nomor whatsapp</label>
                <input type="text" name="whatsapp" class="form-control rounded-pill" id="inputWhatsapp" placeholder="Masukkan nomor whatsapp aktif kamu"
                    value="{{old('whatsapp')}}" />

                @error('whatsapp')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
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
                    value="{{old('password')}}" />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <a
                href=""
                class="btn btn-violet rounded-pill w-100 mt-4 mb-3"
            >Daftar Akun</a>
            <div class="d-flex flex-row rounded-pill mt-3">
                <i class="fa-solid fa-user-lock px-3 py-2"></i>
                <p class="text-muted" style="font-size: 0.8rem;">Data kamu dijamin aman, hanya digunakan untuk keperluan konseling dan tidak akan disebarluaskan</p>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
