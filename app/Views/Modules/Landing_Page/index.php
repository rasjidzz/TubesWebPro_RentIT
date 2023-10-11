<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container position-relative rounded-3 " style=" display:flex; justify-content: center;  background-image: url('/Assets/GKU.jpg'); background-size: cover; height: 80vh; font-family: 'Open Sans', sans-serif;">
    <div class="overlay rounded-3">
        <div class="m-5" style="text-align: center; color: white;">
            <h1>SELAMAT DATANG, MAU SEWA FASILITAS ?</h1>
            <h1>MASUK PAKAI AKUN SSO DULU YUK ?</h1>
        </div>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');

    .overlay {
        position: absolute;
        margin: auto;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Warna latar belakang hitam dengan tingkat kecerahan 0.5 (50%) */
        z-index: 0;
        /* Z-index harus lebih rendah daripada konten agar berada di belakangnya */
    }
</style>

<?= $this->endSection(); ?>