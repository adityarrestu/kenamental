@props(['psikolog'])

@php
    $tags = explode(',', $psikolog->tags)
@endphp

<div class="card w-100">
    <img src="{{ asset('storage/' . $psikolog->image) }}" class="card-img-top" alt="..." />
    <div class="card-body">
        <p class="card-title fw-bold truncate text-truncate">{{$psikolog->name}}</p>
        <ul class="ps-0">
            @foreach ($tags as $tag)
            <li class="list-unstyled">
                <small>
                    <i class="fa-solid fa-circle-check pe-1"></i>
                    {{$tag}}
                </small>
            </li>
            @endforeach
        </ul>
    </div>
</div>
