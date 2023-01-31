@extends('layout.app')

@section('content')
<div id="dasboard" style="min-height: 100vh;">
    <nav class="container pt-5 mt-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
                class="nav-link active"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home"
                type="button"
                role="tab"
                aria-controls="home"
                aria-selected="true"
            >Psikolog</button>
          </li>
          <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#profile"
                type="button"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
            >Testimoni</button>
          </li>
          <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="messages-tab"
                data-bs-toggle="tab"
                data-bs-target="#messages"
                type="button"
                role="tab"
                aria-controls="messages"
                aria-selected="false"
            >Jadwal Konseling</button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div
                class="tab-pane pt-4 px-3 active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
            >
            @include('partials._psikolog-dashboard')
            </div>
            <div
                class="tab-pane pt-4 px-3"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
            >
            @include('partials._testimoni-dashboard')
            </div>
            <div
                class="tab-pane pt-4 px-3"
                id="messages"
                role="tabpanel"
                aria-labelledby="messages-tab"
            >
            @include('partials._jadwal-konseling-dashboard')
            </div>
        </div>
    </nav>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
