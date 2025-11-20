

<?php $__env->startSection('content'); ?>

<style>
    .page-title {
        font-size: 2.6rem;
        font-weight: 700;
        color: #fff;
    }

    .subtext {
        color: #bbbbbb;
        font-size: 15px;
    }

    .soft-card {
        background: rgba(255, 255, 255, 0.06);
        backdrop-filter: blur(12px);
        border-radius: 18px;
        padding: 25px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 8px 22px rgba(0,0,0,0.35);
    }

    label {
        color: #fff;
        font-weight: 600;
    }

    .btn-primary {
        border-radius: 10px;
        font-weight: 600;
    }
</style>

<div class="container py-5 mt-5">

    <h1 class="page-title mb-2">Contact Us</h1>
    <p class="subtext mb-4">Hubungi kami untuk informasi event, kerja sama, partnership, atau pertanyaan lainnya.</p>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-7">

            <form class="soft-card">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama Anda">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email Anda">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-control" rows="4" placeholder="Tulis pesan..."></textarea>
                </div>

                <button class="btn btn-primary px-4 py-2">Kirim Pesan</button>

            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\praktikumakhir\resources\views/contact.blade.php ENDPATH**/ ?>