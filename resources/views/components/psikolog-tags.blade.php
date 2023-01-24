@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

<div class="w-100 my-2 d-flex flex-wrap">
    @foreach ($tags as $tag)
        <small class="rounded-pill bg-violet tag-item px-2 py-1 mb-2 me-1">
            {{$tag}}
        </small>
    @endforeach
</div>
