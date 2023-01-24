@extends('layout.app')

@section('content')
<section id="settings" class="d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="col-lg-5 col-xl-5 card px-5 py-4 mt-4">
        <h4>Pengaturan Akun</h4>
        <form method="POST" action="/user/{{auth()->user()->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    aria-describedby="helpId"
                    value="{{auth()->user()->name}}"
                />
                @error('name')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">whatsapp</label>
                <input
                    type="text"
                    class="form-control"
                    name="whatsapp"
                    id="whatsapp"
                    aria-describedby="helpId"
                    value="{{auth()->user()->whatsapp}}"
                />
                @error('whatsapp')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="email"
                    aria-describedby="helpId"
                    value="{{auth()->user()->email}}"
                />
                @error('email')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    aria-describedby="helpId"
                />
                @error('password')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <button
                type="submit"
                class="btn btn-violet rounded-pill w-100 mt-4 mb-3"
            >
                <i class="fa-solid fa-pen-to-square me-2"></i>
                Ubah Data Akun
            </button>
        </form>
        <form method="POST" action="/user/destroy">
            @csrf
            @method('DELETE')
            <button
                type="submit"
                class="btn btn-danger rounded-pill w-100 mb-3"
            >
                <i class="fa-solid fa-trash me-2"></i>
                Hapus Akun
            </button>
        </form>
    </div>
</section>
@endsection

@section('script')
    @include('partials._script')
@endsection
