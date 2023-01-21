<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Kena Mental.com</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarSupportedContent"
      >
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item px-2">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="/tes-mental">Tes Mental</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="#psikolog">Psikolog</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="#testimoni">Testimoni</a>
          </li>
        </ul>
        @auth
        <a
            href="/conseling"
            id="btnLogin"
            class="btn btn-light rounded-pill px-4"
        >
            Jadwalkan Konsultasi
        </a>
        @else
        <a
            href="/login"
            id="btnLogin"
            class="btn btn-light rounded-pill px-4"
        >
            Login
        </a>
        @endauth
      </div>
    </div>
  </nav>
