@extends('layout.app')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center py-5" style="min-height: 100vh">
    <div class="d-flex justify-content-start align-items-center w-100 pt-4">
        <a
            href="/sp/dashboard"
            class="text-violet"
        >
            <i class="fa-solid fa-arrow-left fs-3"></i>
        </a>
    </div>
    <div class="col-lg-5 col-xl-5 card px-5 py-4">
        <h4 class="text-center fw-bold mb-4">
            Tambah Data Psikolog
        </h4>
        <form class="d-flex flex-column" method="POST" action="/sp/psikolog/create" enctype="multipart/form-data">
            @csrf
            <div class="form-input mb-3">
                <label
                    for="inputNama"
                    class="mb-2 mx-2"
                >nama lengkap</label>
                <input
                    type="text"
                    name="name"
                    class="form-control rounded-pill"
                    id="inputNama"
                    placeholder="Masukkan nama"
                    value="{{old('name')}}"
                />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label
                    for="inputSipp"
                    class="mb-2 mx-2"
                >sipp</label>
                <input
                    type="text"
                    name="sipp"
                    class="form-control rounded-pill"
                    id="inputSipp"
                    placeholder="Masukkan nomor sipp aktif kamu"
                    value="{{old('sipp')}}"
                />

                @error('sipp')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label
                    for="inputEducation"
                    class="mb-2 mx-2"
                >pendidikan</label>
                <input
                    type="text"
                    name="education"
                    class="form-control rounded-pill"
                    id="inputEducation"
                    placeholder="Masukkan education"
                    value="{{old('education')}}"
                />

                @error('education')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label
                    for="inputTags"
                    class="mb-2 mx-2"
                >tags</label>
                <input
                    type="text"
                    name="tags"
                    class="form-control rounded-pill"
                    placeholder="Contoh: Parenting, Keluarga, Kecemasan"
                    value="{{old('tags')}}"
                />

                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-input mb-3">
                <label
                    for="inputImg"
                    class="mb-2 mx-2"
                >foto profil</label>
                <input
                    type="file"
                    name="image"
                    class="form-control rounded-pill"
                    id="inputImg"
                    value="{{old('img')}}"
                />

                @error('img')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
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
