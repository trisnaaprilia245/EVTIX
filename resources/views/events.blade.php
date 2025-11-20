@extends('layouts.main')

@section('content')

<div class="container py-5 mt-5">

    <!-- EVENT SEDANG BERLANGSUNG -->
    <h1 class="fw-bold text-white mb-2">Event Sedang Berlangsung</h1>
    <p class="text-light mb-4" style="color: #bbb !important;">
        Jangan lewatkan event terbaik saat ini.
    </p>

    <div class="row">
        <!-- Blackpink Deadline -->
        <div class="col-md-4 mb-4">
            <div class="p-3 shadow-lg" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border-radius:18px; border:1px solid rgba(255,255,255,0.07);">
                <img src="/img/bpdeadline.jpg" class="img-fluid rounded mb-3" style="height:200px;width:100%;object-fit:cover;">
                <h5 class="fw-bold text-white">Blackpink Deadline</h5>
                <p class="text-light" style="color:#ccc !important;">
                    Konser Blackpink di Jakarta Tahun 2025.
                </p>
                <button class="btn w-100 btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#eventModal"
                        data-title="Blackpink Deadline"
                        data-desc="Konser ini akan menghadirkan panggung megah dengan visual futuristik, permainan cahaya intens, efek sinematik, serta aransemen ulang dari lagu-lagu ikonik BLACKPINK. Setiap member akan mendapatkan spotlight khusus dengan solo stage yang menampilkan karakter dan warna musik masing-masing. Selain lagu-lagu hits, “DEADLINE” juga akan menampilkan penampilan perdana untuk beberapa track terbaru dengan koreografi yang lebih eksplosif. Para penggemar (BLINK) akan diajak memasuki pengalaman emosional dan penuh adrenalin, seolah-olah berpacu dengan waktu bersama BLACKPINK. Konser ini dirancang sebagai perayaan besar yang menyatukan musik, teknologi, dan seni visual, menghadirkan pengalaman tak terlupakan bagi BLINK di seluruh dunia."
                        data-img="/img/bpdeadline.jpg"
                        style="background:#4c43df;color:white;border-radius:10px;">
                    Lihat Detail
                </button>
            </div>
        </div>

        <!-- Hindia -->
        <div class="col-md-4 mb-4">
            <div class="p-3 shadow-lg" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border-radius:18px; border:1px solid rgba(255,255,255,0.07);">
                <img src="/img/hindia.jpg" class="img-fluid rounded mb-3" style="height:200px;width:100%;object-fit:cover;">
                <h5 class="fw-bold text-white">Konser Hindia</h5>
                <p class="text-light" style="color:#ccc !important;">
                    Hindia hadir di Jakarta Tahun 2025.
                </p>
                <button class="btn w-100 btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#eventModal"
                        data-title="Hindia"
                        data-desc="Konser ini menghadirkan perjalanan emosional melalui rangkaian lagu Hindia yang penuh makna, kejujuran, dan refleksi kehidupan. Dengan aransemen live yang intim namun tetap megah, penonton akan diajak menyelami cerita tentang keluarga, pertemanan, kehilangan, dan proses menjadi manusia. Visual konser yang minimalis-modern dipadukan dengan storytelling khas Hindia membuat pengalaman ini terasa personal, hangat, dan membekas."
                        data-img="/img/hindia.jpg"
                        style="background:#4c43df;color:white;border-radius:10px;">
                    Lihat Detail
                </button>
            </div>
        </div>

        <!-- Taylor Swift -->
        <div class="col-md-4 mb-4">
            <div class="p-3 shadow-lg" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border-radius:18px; border:1px solid rgba(255,255,255,0.07);">
                <img src="/img/taylor.jpg" class="img-fluid rounded mb-3" style="height:200px;width:100%;object-fit:cover;">
                <h5 class="fw-bold text-white">Konser Taylor Swift</h5>
                <p class="text-light" style="color:#ccc !important;">
                    Swiftie hadir di Jakarta Tahun 2025.
                </p>
                <button class="btn w-100 btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#eventModal"
                        data-title="Taylor Swift"
                        data-desc="Konser ini dirancang sebagai perjalanan menyusuri setiap era musikal Taylor Swift, mulai dari country roots hingga pop dan folk alternatif. Dengan produksi panggung berskala besar, pencahayaan megah, kostum ikonik, dan pertunjukan penuh energi, konser ini memberi pengalaman emosional dan sinematis bagi Swifties. Penonton akan menikmati lagu-lagu hits, momen interaktif, hingga kejutan dari special acoustic set yang menjadi ciri khas Taylor."
                        data-img="/img/taylor.jpg"
                        style="background:#4c43df;color:white;border-radius:10px;">
                    Lihat Detail
                </button>
            </div>
        </div>
    </div>

    <!-- EVENT AKAN DATANG -->
    <h1 class="fw-bold text-white mt-5 mb-2">Event Akan Datang</h1>
    <p class="text-light mb-4" style="color: #bbb !important;">
        Daftar event terbaru yang akan segera hadir.
    </p>

    <div class="row">
        <!-- Pameran Seni -->
        <div class="col-md-4 mb-4">
            <div class="p-3 shadow-lg" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border-radius:18px; border:1px solid rgba(255,255,255,0.07);">
                <img src="/img/seni.jpg" class="img-fluid rounded mb-3" style="height:200px;width:100%;object-fit:cover;">
                <h5 class="fw-bold text-white">Pameran Seni</h5>
                <p class="text-light" style="color:#ccc !important;">
                    Pameran seni terbesar 2025.
                </p>
                <button class="btn w-100 btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#eventModal"
                        data-title="Pameran Seni"
                        data-desc="Pameran ini menampilkan karya seniman lokal dan internasional yang mengeksplorasi warna, bentuk, dan cerita dari berbagai perspektif. Pengunjung dapat menikmati lukisan, instalasi, fotografi, hingga karya digital yang menggugah emosi dan mengajak dialog mengenai identitas, ruang, dan masa depan. Pameran ini dirancang interaktif, menghadirkan zona edukasi, artist talk, dan area immersive untuk pengalaman seni yang lebih dekat dan mendalam."
                        data-img="/img/seni.jpg"
                        style="background:#4c43df;color:white;border-radius:10px;">
                    Lihat Detail
                </button>
            </div>
        </div>

        <!-- Carnival -->
        <div class="col-md-4 mb-4">
            <div class="p-3 shadow-lg" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border-radius:18px; border:1px solid rgba(255,255,255,0.07);">
                <img src="/img/carnival.jpg" class="img-fluid rounded mb-3" style="height:200px;width:100%;object-fit:cover;">
                <h5 class="fw-bold text-white">Carnival</h5>
                <p class="text-light" style="color:#ccc !important;">
                    Nikmati wahana carnival terbaik.
                </p>
                <button class="btn w-100 btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#eventModal"
                        data-title="Carnival"
                        data-desc="Sebuah karnaval spektakuler yang menghadirkan suasana penuh warna dengan parade cahaya, wahana permainan, atraksi panggung, dan stand hiburan keluarga. WonderNight Carnival dirancang sebagai tempat bertemu berbagai dunia fantasi—mulai dari karakter, kostum, hingga pertunjukan musik dan tari. Lokasinya yang penuh dekorasi tematik membuat setiap sudutnya Instagram-worthy dan menyenangkan untuk semua kalangan."
                        data-img="/img/carnival.jpg"
                        style="background:#4c43df;color:white;border-radius:10px;">
                    Lihat Detail
                </button>
            </div>
        </div>

        <!-- Food Festival -->
        <div class="col-md-4 mb-4">
            <div class="p-3 shadow-lg" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border-radius:18px; border:1px solid rgba(255,255,255,0.07);">
                <img src="/img/food.jpg" class="img-fluid rounded mb-3" style="height:200px;width:100%;object-fit:cover;">
                <h5 class="fw-bold text-white">Food Festival</h5>
                <p class="text-light" style="color:#ccc !important;">
                    Pameran makanan terbesar.
                </p>
                <button class="btn w-100 btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#eventModal"
                        data-title="Food Festival"
                        data-desc="Festival kuliner ini menyatukan berbagai cita rasa dari street food lokal, hidangan tradisional, hingga kreasi modern dari chef dan UMKM. Pengunjung bisa menjelajahi lebih dari puluhan booth makanan, demo memasak, kompetisi kuliner, hingga ruang duduk tematik yang nyaman. Acara ini menjadi ruang untuk menikmati makanan, berkumpul, dan merayakan kekayaan kuliner dengan suasana meriah dan musik live."
                        data-img="/img/food.jpg"
                        style="background:#4c43df;color:white;border-radius:10px;">
                    Lihat Detail
                </button>
            </div>
        </div>
    </div>

</div>

<!-- MODAL DETAIL -->
<style>
.modal-content { border-radius: 18px; overflow: hidden; box-shadow: 0 0 40px rgba(0,0,0,0.4); }
.modal-left-img { width:100%; height:100%; object-fit:cover; }
</style>

<div class="modal fade" id="eventModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="row g-0">
                <!-- LEFT IMAGE -->
                <div class="col-md-6">
                    <img id="modalImg" class="modal-left-img">
                </div>
                <!-- RIGHT TEXT -->
                <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                    <h2 id="modalTitle" class="fw-bold mb-3" style="color:#111;"></h2>
                    <p id="modalDesc" style="font-size:16px; color:#444;"></p>
                    <a href="{{ route('tickets') }}"
                       class="btn mt-4 py-2"
                       style="background:#170b2a; color:white; border-radius:10px; font-weight:600;">
                        Pesan Tiket
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll(".btn-detail").forEach(btn => {
    btn.addEventListener("click", function(){
        document.getElementById("modalImg").src = this.dataset.img;
        document.getElementById("modalTitle").innerText = this.dataset.title;
        document.getElementById("modalDesc").innerText = this.dataset.desc;
    });
});
</script>

@endsection
