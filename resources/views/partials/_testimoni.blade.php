<section id="testimoni" class="container py-5 mb-5">
    <div class="row pt-5">
        <div class="d-flex flex-column col-4">
            <h1 class="fw-bold">Testimoni</h1>
            <p class="fs-4">Apa kata mereka setelah konsultasi bersama kami?</p>
            <div class="owl-nav">
                <div class="customNextBtnTestimoni btn-next rounded-circle px-3 mx-2">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="customPreviousBtnTestimoni btn-prev rounded-circle px-3 mx-2">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="col overflow-hidden">
            <div id="testimoniCarousel" class="owl-carousel">
                @foreach ($testimonis as $testimoni)
                    <x-carousel-testimoni :testimoni="$testimoni" />
                @endforeach
            </div>
        </div>
    </div>
</section>
