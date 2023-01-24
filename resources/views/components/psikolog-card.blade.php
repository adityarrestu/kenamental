@props(['psikolog'])

<div {{$attributes}} class="card mb-3 cursor-pointer">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('images/psikolog-1.png') }}" class="img-fluid rounded-start" style="max-height: 10rem; object-fit: contain;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{{$psikolog->name}}</h5>
            <x-psikolog-tags :tagsCsv="$psikolog->tags" />
        </div>
      </div>
    </div>
</div>
