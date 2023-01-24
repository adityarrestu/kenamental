@extends('layout.app')

@section('content')
<div class="container d-flex flex-row align-items-center" style="min-height: 100vh;">
    @include('partials._conseling')

    <div class="d-flex flex-column align-items-end w-100 py-5 mt-5">
        <div id="psikolog-list" class="overflow-scroll list-psikolog w-50">
            @foreach ($psikologs as $psikolog)
            <a href="/conseling/{{$psikolog->id}}" class="text-decoration-none text-dark">
                <x-psikolog-card :psikolog="$psikolog"/>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
