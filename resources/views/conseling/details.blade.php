@extends('layout.app')

@section('content')
<div class="container d-flex flex-row align-items-center" style="min-height: 100vh;">
    @include('partials._conseling')

    <div class="card position-absolute pt-4 pb-3 px-4 w-50" style="right: 50px; ">
        <a href="{{url()->previous()}}" class="position-absolute btn btn-violet rounded-circle" style="top: 8px; left: 8px;">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div class="d-flex flex-row mb-3">
            <img src="{{asset('/images/psikolog-1.png')}}" class="img-detail" alt="">
            <div class="d-flex flex-column mx-4">
                <h5 class="fw-bold">{{$psikolog->name}}</h5>
                <x-psikolog-tags tagsCsv="{{$psikolog->tags}}" />
                <div class="d-flex flex-row">
                    <i class="fa-solid fa-file-shield pt-2"></i>
                    <div class="d-flex flex-column mx-2 mt-1">
                        <p class="fw-bold mb-1">Nomor Izin Praktik</p>
                        <small class="text-muted">SIPP: {{$psikolog->sipp}}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-start py-3 border-top">
            <div class="d-flex flex-row border-end pe-4">
                <i class="fa-solid fa-clock pt-1 px-2"></i>
                <p class="text-muted">1 x Sesi 60 menit</p>
            </div>
            <div class="d-flex flex-row px-3">
                <i class="fa-solid fa-video pt-1 px-2"></i>
                <p class="text-muted">Media Conseling: <span class="fw-bold ps-1">Voice/Video Call</span></p>
            </div>
        </div>
        <form action="POST">

            <div class="pb-2 w-75">
                <div class="mb-3 row">
                    <div class="d-flex flex-row col">
                        <i class="fa-solid fa-calendar-check pt-2 ps-2"></i>
                        <label for="inputJadwal" class="col-form-label ps-2">Atur jadwal</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="datetime-local" class="form-control" id="inputJadwal">
                    </div>
                </div>

                <h5 class="fw-bold">Ringkasan Biaya</h5>
                <div class="d-flex align-itmes-center justify-content-between">
                    <p class="my-1">Biaya konseling</p>
                    <p class="my-1">Rp 150.000</p>
                </div>
                <div class="d-flex align-itmes-center justify-content-between">
                    <p class="my-1">Biaya administrasi</p>
                    <p class="my-1">Rp 10.000</p>
                </div>
            </div>

            <div class="d-flex flex-row row border-top pt-3">
                <div class="d-flex flex-column col-3">
                    <p class="text-muted m-0">Total Harga</p>
                    <p class="fw-bold m-0">Rp 160.000</p>
                </div>
                <div class="d-flex px-0 col">
                    <button
                        type="submit"
                        class="btn btn-violet rounded-pill w-100"
                    >
                        Lanjut Checkout
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
