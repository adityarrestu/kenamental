<!-- Modal trigger button -->
<button
    type="button"
    class="btn btn-violet"
    data-bs-toggle="modal"
    data-bs-target="#modalId"
>
    Tambah Testimoni Baru
</button>
<div class="row row-cols-2 py-4">
    @unless ($testimonis->isEmpty())
        @foreach ($testimonis as $testimoni)
        <div class="col mb-3">
            <div class="card w-100">
                <img src="{{ asset('storage/' . $testimoni->testimoni) }}" class="card-img-top" style="object-fit: contain; height: 300px" alt="..." />
                <div
                    class="position-absolute m-2"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Hapus Data"
                >
                    <button
                        data-bs-toggle="modal"
                        data-bs-target="#modalDelete"
                        data-bs-content="{{$testimoni->id}}"
                        class="btn btn-danger"
                    >
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>


        <x-modal id="modalDelete" :title="$titleDelete">
            <div class="modal-body">
                <p>Anda akan menghapus Testimoni ini?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="/sp/testimoni/{{$testimoni->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </form>
            </div>
        </x-modal>
        @endforeach
    @else
        <div class="d-flex align-items-center justify-content-center my-5 w-100">
            <h4 class="text-muted">Data Testimoni Tidak Ditemukan</h4>
        </div>
    @endunless
</div>

@php
    $titleTestimoni = 'Tambah Testimoni Baru';
    $titleDelete = 'Hapus Data';
@endphp
{{-- Add New Testimoni Modal --}}
<x-modal id="modalId" :title="$titleTestimoni">
    <div class="modal-body px-4">

        <form method="POST" action="/sp/testimoni/create" enctype="multipart/form-data">
            @csrf
            <div class="form-input mb-3">
                <label for="inputTestimoni" class="mb-2 mx-2">masukkan gambar testimoni</label>
                <input type="file" name="testimoni" class="form-control rounded-pill" id="inputTestimoni"
                    value="{{old('testimoni')}}" />

                @error('testimoni')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="btn btn-violet rounded-pill w-100 mt-4 mb-3"
            >
                Buat Testimoni
            </button>
        </form>
    </div>
</x-modal>

<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>
