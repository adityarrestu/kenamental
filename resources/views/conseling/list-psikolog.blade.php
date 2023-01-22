@extends('layout.app')

@section('content')
<div class="container d-flex flex-row align-items-center" style="min-height: 100vh">
    <div class="position-fixed" style="top: 10rem; z-index: -1">
        <div class="display-6 mb-2">Jadwalkan Konsultasi Anda</div>
        <h2>Pilih Psikolog</h2>
        <div class="py-3">
            <p><span class="rounded-circle bg-violet px-2 me-2">1</span>Pilih Psikolog yang sesuai menangani kondisi kamu</p>
            <p><span class="rounded-circle bg-violet px-2 me-2">2</span>Atur jadwal konsultasi</p>
            <p><span class="rounded-circle bg-violet px-2 me-2">3</span>Konsultasikan permasalahan kamu</p>
        </div>
        <div class="d-flex flex-row mt-3">
            <i class="fa-solid fa-user-lock pe-3 py-2"></i>
            <small class="text-muted w-50">Semua yang kamu ceritakan dengan psikolog bersifat rahasia dan privasimu dijamin aman di bawah Kode Etik Psikologi</small>
        </div>
    </div>

    <div class="d-flex flex-column align-items-end w-100 py-5 mt-5">
        <div class="card mb-3 w-50">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('images/psikolog-1.png') }}" class="img-fluid rounded-start" style="min-height: 14rem; object-fit: contain;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Psikolog</h5>
                  <p class="card-text">Tag</p>
                </div>
              </div>
            </div>
        </div>

        <div class="card mb-3 w-50">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('images/psikolog-2.png') }}" class="img-fluid rounded-start" style="min-height: 14rem; object-fit: contain;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Psikolog</h5>
                  <p class="card-text">Tag</p>
                </div>
              </div>
            </div>
        </div>

        <div class="card mb-3 w-50">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('images/psikolog-3.png') }}" class="img-fluid rounded-start" style="min-height: 14rem; object-fit: contain;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Psikolog</h5>
                  <p class="card-text">Tag</p>
                </div>
              </div>
            </div>
        </div>

        <div class="card mb-3 w-50">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('images/psikolog-1.png') }}" class="img-fluid rounded-start" style="min-height: 14rem; object-fit: contain;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Psikolog</h5>
                  <p class="card-text">Tag</p>
                </div>
              </div>
            </div>
        </div>

        <div class="card mb-3 w-50">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('images/psikolog-2.png') }}" class="img-fluid rounded-start" style="min-height: 14rem; object-fit: contain;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Psikolog</h5>
                  <p class="card-text">Tag</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
