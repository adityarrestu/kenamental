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
            <button class="btn btn-violet">
                <a
                    href="/sp/psikolog/register"
                    class=" text-decoration-none text-light"
                >
                    Tambah Data Psikolog
                </a>
            </button>
            <table class="table mt-4">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> profile </div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"> messages </div>
        </div>
    </nav>
</div>
@endsection

@section('script')
    @include('partials._script')
@endsection
