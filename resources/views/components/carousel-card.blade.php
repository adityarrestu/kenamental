@props(['psikolog'])

<div class="card w-100">
    <img src="{{ asset('images/bannerimg.png') }}" class="card-img-top" alt="..." />
    <div class="card-body">
        <h5 class="card-title">{{$psikolog->name}}</h5>
        <p class="card-text">
            {{$psikolog->about}}
        </p>
    </div>
</div>
