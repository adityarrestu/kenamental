@extends('layout.app')

@section('content')
<div class="container d-flex flex-row align-items-center" style="min-height: 100vh;">
    <div class="position-absolute" style="top: 6rem; z-index: -1">
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

    <div x-data="{ open: false }" class="d-flex flex-column align-items-end w-100 py-5 mt-5">
        <div class="overflow-scroll list-psikolog w-50">
            <div class="card mb-3"  @click="open = true">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('images/psikolog-1.png') }}" class="img-fluid rounded-start" style="max-height: 12rem; object-fit: contain;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Nama Psikolog</h5>
                        <div class="w-100 my-2 d-flex flex-wrap">
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Parenting</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Relationship</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Kecemasan</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Depress</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Regulasi Emosi</small>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card mb-3 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('images/psikolog-2.png') }}" class="img-fluid rounded-start" style="max-height: 12rem; object-fit: contain;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Nama Psikolog</h5>
                        <div class="w-100 my-2 d-flex flex-wrap">
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Parenting</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Relationship</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Kecemasan</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Depress</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Regulasi Emosi</small>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card mb-3 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('images/psikolog-3.png') }}" class="img-fluid rounded-start" style="max-height: 12rem; object-fit: contain;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Nama Psikolog</h5>
                        <div class="w-100 my-2 d-flex flex-wrap">
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Parenting</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Relationship</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Kecemasan</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Depress</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Regulasi Emosi</small>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card mb-3 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('images/psikolog-1.png') }}" class="img-fluid rounded-start" style="max-height: 12rem; object-fit: contain;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Nama Psikolog</h5>
                        <div class="w-100 my-2 d-flex flex-wrap">
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Parenting</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Relationship</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Kecemasan</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Depress</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Regulasi Emosi</small>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card mb-3 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('images/psikolog-2.png') }}" class="img-fluid rounded-start" style="max-height: 12rem; object-fit: contain;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Nama Psikolog</h5>
                        <div class="w-100 my-2 d-flex flex-wrap">
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Parenting</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Relationship</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Kecemasan</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Depress</small>
                            <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Regulasi Emosi</small>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        {{-- Component --}}
        <div x-show="open" class="card position-absolute pt-4 pb-3 px-4 w-50" style="right: 50px; ">
            <button class="position-absolute btn btn-violet rounded-circle" @click="open = false" style="top: 8px; left: 8px;">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="d-flex flex-row mb-3">
                <img src="{{asset('/images/psikolog-1.png')}}" class="img-detail" alt="">
                <div class="d-flex flex-column mx-4">
                    <h5 class="fw-bold">Setiawan Adib Wibowo, S.Psi., M.Psi.</h5>
                    <div class="w-100 my-2 d-flex flex-wrap">
                        <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Parenting</small>
                        <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Relationship</small>
                        <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Kecemasan</small>
                        <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Depress</small>
                        <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">Regulasi Emosi</small>
                    </div>
                    <div class="d-flex flex-row">
                        <i class="fa-solid fa-file-shield pt-2"></i>
                        <div class="d-flex flex-column mx-2 mt-1">
                            <p class="fw-bold mb-1">Nomor Izin Praktik</p>
                            <small class="text-muted">SIPP: 08335-12/30/1920-14-3-3</small>
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
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
