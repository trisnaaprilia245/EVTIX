@extends('layouts.main')

@section('content')

<style>

    body {
        background: #0c0c14;
    }

    section {
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #0c0c14 60%, #111122);
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .subtext {
        color: #cfcfe8;
        font-size: 1.1rem;
    }

    .soft-card {
        background: #151524;
        border-radius: 14px;
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, 0.06);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
        transition: 0.3s;
    }

    .soft-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.45);
    }

    .soft-card img {
        border-radius: 10px;
    }

    .section-title {
        font-size: 2.3rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .divider {
        width: 70px;
        height: 4px;
        background: #4f46e5;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .form-control, .form-select {
        background: #1b1b2b;
        border: 1px solid #303048;
        color: #fff;
        border-radius: 10px;
    }

    .form-control:focus {
        background: #1b1b2b;
        color: #fff;
        border-color: #4f46e5;
        box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
    }

    footer {
        background: #0a0a12;
        padding: 40px 0;
    }
    .hero-slide {
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
}

.overlay-dark {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55); /* lebih gelap */
    z-index: 1;
}

.hero-text {
    position: relative;
    z-index: 2;
    max-width: 650px;
    color: white;
}


    html {
        scroll-behavior: smooth;
    }
</style>

<div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
        {{-- SLIDE 1 --}}
        <div class="carousel-item active">
            <div class="hero-slide" style="background-image: url('/img/bpdeadline.jpg')">
                <div class="overlay-dark"></div>
                <div class="hero-text container">
                    <h1 class="display-4 fw-bold">Music Festival 2025</h1>
                    <p class="lead">Saksikan festival musik terbesar tahun ini!</p>
                    <a href="{{ route('tickets') }}" class="btn btn-primary px-4 py-2 mt-2">Get Tickets</a>
                </div>
            </div>
        </div>

        {{-- SLIDE 2 --}}
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: url('/img/hindia.jpg')">
                <div class="overlay-dark"></div>
                <div class="hero-text container">
                    <h1 class="display-4 fw-bold">Tech Conference</h1>
                    <p class="lead">Ikuti event teknologi terbesar dengan ratusan inovator.</p>
                    <a href="{{ route('tickets') }}" class="btn btn-primary px-4 py-2 mt-2">Discover</a>
                </div>
            </div>
        </div>

        {{-- SLIDE 3 --}}
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: url('/img/taylor.jpg')">
                <div class="overlay-dark"></div>
                <div class="hero-text container">
                    <h1 class="display-4 fw-bold">Sports Championship</h1>
                    <p class="lead">Pertandingan paling bergengsi tahun ini!</p>
                    <a href="{{ route('tickets') }}" class="btn btn-primary px-4 py-2 mt-2">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="section-events" class="py-5" style="background: #0e0e0e;">
    <div class="container">
        <h2 class="text-center fw-bold text-white mb-2">Event yang Sedang Berlangsung</h2>
        <div class="mx-auto mb-3" style="width: 70px; height: 3px; background: #4c43df; border-radius: 5px;"></div>
        <p class="text-center text-light mb-5" style="color: #bbb !important;">
            Pilih event terbaik yang sedang aktif atau segera hadir.
        </p>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="p-3 shadow-lg h-100"
                     style="background: rgba(255,255,255,0.05);
                            backdrop-filter: blur(10px);
                            border-radius: 18px;
                            border: 1px solid rgba(255,255,255,0.07);">

                    <div class="event-image-wrapper mb-3" style="border-radius: 14px; overflow: hidden;">
                        <img src="/img/bpdeadline.jpg" class="img-fluid" style="object-fit: cover; height: 200px; width: 100%;">
                    </div>

                    <h5 class="text-white fw-bold">Blackpink Deadline</h5>
                    <p class="text-light" style="color: #ccc !important;">Konser Blackpink di Jakarta Tahun 2025.</p>

                    <a href="{{ route('events') }}"
                       class="btn btn-primary btn-sm mt-2"
                       style="background: #4c43df; border: none; border-radius: 10px;">
                        Detail Event
                    </a>
                </div>
            </div>

            <!-- EVENT CARD -->
            <div class="col-md-4 mb-4">
                <div class="p-3 shadow-lg h-100"
                     style="background: rgba(255,255,255,0.05);
                            backdrop-filter: blur(10px);
                            border-radius: 18px;
                            border: 1px solid rgba(255,255,255,0.07);">

                    <div class="event-image-wrapper mb-3" style="border-radius: 14px; overflow: hidden;">
                        <img src="/img/hindia.jpg" class="img-fluid" style="object-fit: cover; height: 200px; width: 100%;">
                    </div>

                    <h5 class="text-white fw-bold">Konser Hindia</h5>
                    <p class="text-light" style="color: #ccc !important;">Konser Hindia di Jakarta Tahun 2025.</p>

                    <a href="{{ route('events') }}"
                       class="btn btn-primary btn-sm mt-2"
                       style="background: #4c43df; border: none; border-radius: 10px;">
                        Detail Event
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-3 shadow-lg h-100"
                     style="background: rgba(255,255,255,0.05);
                            backdrop-filter: blur(10px);
                            border-radius: 18px;
                            border: 1px solid rgba(255,255,255,0.07);">

                    <div class="event-image-wrapper mb-3" style="border-radius: 14px; overflow: hidden;">
                        <img src="/img/taylor.jpg" class="img-fluid" style="object-fit: cover; height: 200px; width: 100%;">
                    </div>

                    <h5 class="text-white fw-bold">Konser Taylor Swift</h5>
                    <p class="text-light" style="color: #ccc !important;">Konser Taylor Swift di Jakarta Tahun 2025.</p>

                    <a href="{{ route('events') }}"
                       class="btn btn-primary btn-sm mt-2"
                       style="background: #4c43df; border: none; border-radius: 10px;">
                        Detail Event
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('events') }}"
               class="btn px-4 py-2"
               style="border: 1px solid #fff; color: #fff; border-radius: 10px;">
                Lihat Semua Event
            </a>
        </div>
    </div>
</section>

<section id="tickets" class="py-5" style="background: #0e0e0e;">
    <div class="container" style="max-width: 720px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2" style="color: #fff;">Buy Tickets</h2>
            <p style="color: #aaa;">Dapatkan tiket event yang sedang berlangsung.</p>
        </div>

        <div class="card border-0 shadow-lg p-4" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(10px); border-radius: 20px;">
            <form>
                <div class="mb-3">
                    <label class="form-label text-white">Pilih Event</label>
                    <select class="form-select">
                        <option>Blackpink Deadline</option>
                        <option>Konser Hindia</option>
                        <option>Konser Taylor Swift</option>
                        <option>Pameran Seni</option>
                        <option>Carnival</option>
                        <option>Food Festival</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Jumlah Tiket</label>
                    <input type="number" min="1" class="form-control" placeholder="1" />
                </div>

                <button class="btn w-100 py-2" style="background: #4c43df; color:white; border-radius: 10px;">
                    Pesan Sekarang
                </button>
            </form>
        </div>
    </div>
</section>

<section id="contact" class="py-5" style="background: #0b0b0b;">
    <div class="container" style="max-width: 750px;">
        <h2 class="text-center fw-bold text-white mb-2">Hubungi Kami</h2>
        <div class="mx-auto mb-3" style="width: 60px; height: 3px; background: #4c43df; border-radius: 5px;"></div>
        <p class="text-center text-light mb-4" style="color: #bbb !important;">
            Kami siap membantu Anda untuk pemesanan, kerjasama, dan informasi event.
        </p>
        <div class="row justify-content-center">
            <div class="col-md-10">

                <form class="p-4 shadow-lg"
                    style="background: rgba(255,255,255,0.06); backdrop-filter: blur(12px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.07);">

                    <div class="mb-3">
                        <label class="form-label text-light">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama Anda"
                               style="background: rgba(255,255,255,0.1); border: none; color: white;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light">Email</label>
                        <input type="email" class="form-control" placeholder="Email Anda"
                               style="background: rgba(255,255,255,0.1); border: none; color: white;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light">Pesan</label>
                        <textarea class="form-control" rows="4" placeholder="Tulis pesan..."
                                  style="background: rgba(255,255,255,0.1); border: none; color: white;"></textarea>
                    </div>

                    <button class="btn w-100 py-2"
                            style="background: #4c43df; color: white; border-radius: 12px;">
                        Kirim
                    </button>
                </form>

            </div>
        </div>

    </div>
</section>

@endsection
