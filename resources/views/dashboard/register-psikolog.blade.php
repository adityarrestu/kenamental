@extends('layout.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center py-5" style="min-height: 100vh">
    <div class="col-lg-5 col-xl-5 card px-5 py-4 mt-4">
        <h4 class="text-center fw-bold mb-4">
            Tambah Data Psikolog
        </h4>
        <form class="d-flex flex-column" method="POST" action="/sp/psikolog/register">
            @csrf
            <div class="form-input mb-3">
                <label for="inputNama" class="mb-2 mx-2">nama lengkap</label>
                <input type="text" name="name" class="form-control rounded-pill" id="inputNama" placeholder="Masukkan nama"
                    value="{{old('name')}}" />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label for="inputSipp" class="mb-2 mx-2">sipp</label>
                <input type="text" name="sipp" class="form-control rounded-pill" id="inputSipp" placeholder="Masukkan nomor sipp aktif kamu"
                    value="{{old('sipp')}}" />

                @error('sipp')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label for="inputEducation" class="mb-2 mx-2">pendidikan</label>
                <input type="text" name="education" class="form-control rounded-pill" id="inputEducation" placeholder="Masukkan education"
                    value="{{old('education')}}" />

                @error('education')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            {{-- <div class="form-input mb-3">
                <label for="inputPassword" class="mb-2 mx-2"></label>
                <input type="password" name="password" class="form-control rounded-pill" id="inputPassword" placeholder="Masukkan kata sandi"
                    value="{{old('password')}}" />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div> --}}
            <button
                type="submit"
                class="btn btn-violet rounded-pill w-100 mt-4 mb-3"
            >Tambah Data</button>
            <div class="d-flex flex-row rounded-pill mt-3">
                <i class="fa-solid fa-user-lock px-3 py-2"></i>
                <p class="text-muted" style="font-size: 0.8rem;">Data yang ditambahkan ini telah terverifikasi dan dapat dipercaya kebenarannya</p>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
