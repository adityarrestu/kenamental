<button class="btn btn-violet">
    <a
        href="/sp/psikolog/register"
        class=" text-decoration-none text-light"
    >
        Tambah Data Psikolog
    </a>
</button>
<div class="row row-cols-2 py-4">
    @unless ($psikologs->isEmpty())

        @foreach ($psikologs as $psikolog)
        <div class="col">
            <x-psikolog-card :psikolog="$psikolog">
                <div class="d-flex flex-row mb-2">
                    <i class="fa-solid fa-graduation-cap pt-2"></i>
                    <div class="d-flex flex-column mx-2 mt-1">
                        <p class="fw-bold mb-1">Pendidikan</p>
                        <small class="text-muted">{{$psikolog->education}}</small>
                    </div>
                </div>
                <div class="d-flex flex-row mb-2">
                    <i class="fa-solid fa-file-shield pt-2"></i>
                    <div class="d-flex flex-column mx-2 mt-1">
                        <p class="fw-bold mb-1">Nomor Izin Praktik</p>
                        <small class="text-muted">SIPP: {{$psikolog->sipp}}</small>
                    </div>
                </div>
                <div class="d-flex flex-row mt-4 justify-content-end">
                    <a
                        href="/sp/psikolog/edit"
                        type="button"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Edit Data"
                        class="btn btn-primary mx-1"
                    >
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <div
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Hapus Data"
                    >
                        <button
                            type="submit"
                            class="btn btn-danger mx-1"
                            data-bs-toggle="modal"
                            data-bs-target="#modalDelete"
                            data-bs-content="{{$psikolog->id}}"
                        >
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </x-psikolog-card>
        </div>
        @endforeach
    @else
    <div class="d-flex align-items-center justify-content-center my-5 w-100">
        <h4 class="text-muted">Data Psikolog Tidak Ditemukan</h4>
    </div>
    @endunless
</div>

@php
    $titleDelete = 'Hapus Data';
@endphp
<x-modal id="modalDelete" :title="$titleDelete">
    <div class="modal-body">
        <p>Anda akan menghapus data ini?</p>
    </div>
    <div class="modal-footer">
        <form method="POST" action="/sp/testimoni/{{$psikolog->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
    </div>
</x-modal>

<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>
