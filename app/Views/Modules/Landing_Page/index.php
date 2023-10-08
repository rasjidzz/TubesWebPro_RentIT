<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container position-relative" style="background-image: url('/Assets/GKU.jpg'); background-size: cover; height: 80vh;">

    <!-- Elemen overlay -->
    <div class="overlay"></div>

    <!-- Konten Anda akan ditempatkan di sini -->
    <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1; text-align: center; color: white;">
        <h1>SELAMAT DATANG, MAU SEWA FASILITAS ?</h1>
        <h1>MASUK PAKAI AKUN SSO DULU YUK ?</h1>
    </div>
</div>
<style>
    .overlay {
        position: absolute;
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