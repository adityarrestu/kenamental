@extends('layout.app')

@section('content')
<section class="container mt-5 pt-4" style="min-height: 100vh">
    <div class="d-flex justify-content-start align-items-center w-100">
        <a
            href="/sp/dashboard"
            class="text-violet mb-2"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="kembali"
        >
            <i class="fa-solid fa-arrow-left fs-3"></i>
        </a>
        <h2 class="ms-4">Ubah Data Profil Psikolog</h2>
    </div>
    <div class="d-flex pt-4">
        <div class="d-flex flex-column">
            <img src="{{ asset('storage/' . $psikolog->image) }}" style="max-height: 200px" alt="">
        </div>
        <div class="w-50 px-5">
            <form class="d-flex flex-column" method="POST" action="/sp/psikolog/{{$psikolog->id}}">
                @csrf
                @method('PUT')
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
                        value="{{$psikolog->name}}"
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
                        value="{{$psikolog->sipp}}"
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
                        value="{{$psikolog->education}}"
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
                        value="{{$psikolog->tags}}"
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
                    />

                    @error('img')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="btn btn-violet rounded-pill w-100 mt-4 mb-3"
                >Ubah Data</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
    @include('partials._script')
@endsection
