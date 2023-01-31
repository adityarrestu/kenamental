@props(['psikolog'])
<div class="card mb-3 cursor-pointer">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $psikolog->image) }}" class="img-fluid rounded-start" style="object-fit: contain;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <p class="card-title fs-5">{{$psikolog->name}}</p>
            <x-psikolog-tags :tagsCsv="$psikolog->tags" />
           {{$slot}}
        </div>
      </div>
    </div>
</div>
