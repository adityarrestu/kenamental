<section id="psikolog" class="container pt-5">
    <div class="row pt-5">
        <div class="d-flex flex-column col-4">
            <h1 class="fw-bold">Profil Psikolog</h1>
            <p class="fs-4">Ayo kenali Psikolog Klinis Terbaik! Konsultasikan kesehatan mental anda bersama</p>
            <div class="owl-nav">
                <div class="customNextBtn btn-next rounded-circle px-3 mx-2">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="customPreviousBtn btn-prev rounded-circle px-3 mx-2">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="col overflow-hidden">
            <div id="psikologCarousel" class="owl-carousel">
                @foreach ($psikologs as $psikolog)
                    <x-carousel-card :psikolog="$psikolog" />
                @endforeach
            </div>
        </div>
    </div>
</section>
