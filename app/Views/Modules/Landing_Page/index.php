<?= $this->extend('layout/template_nonAuth'); ?>

<?= $this->section('content'); ?>

<section class="container-fluid my-3 bg-image">
    <div class="container-fluid position-relative rounded-3" style=" display:flex; justify-content: center;  background-image: url('/Assets/GKU.jpg'); background-size: cover; height: 80vh; font-family: 'Open Sans', sans-serif; border-radius: 25px;">
        <div class=" overlay rounded-3">
            <div class="row mt-5">
            </div>
            <div class="row mt-5">
                <div class="" style="text-align: center; color: white;">
                    <h1 style="font-weight: bold; color: white;">SELAMAT DATANG, MAU SEWA FASILITAS ?</h1>
                    <h1 style="font-weight: bold; color: white;">MASUK PAKAI AKUN SSO DULU YUK ?</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="" style="text-align: center;">
                    <h1 style="color: white;">Sign In</h1>
                </div>
                <div class="mt-3" style="text-align: center;">
                    <a class="btn btn-light" style="width: 400px; border-radius: 15px;" href="<?= base_url('/login') ?>">
                        <img src="/Assets/365Logo.png" alt="Office 365 Logo" style="max-width: 20px; margin-right: 5px;">
                        Connect with Office 365
                    </a>
                </div>
            </div>
            <div class="row mt-5"></div>
            <div class="row mt-5"></div>
            <div class="row mt-5"></div>
            <div class="row mt-5"></div>
            <div class="row mt-5">
                <div class="col ms-3" style="text-align: start; color: white;">
                    <p class="fw-bold">Address</p>
                    <p>Gedung Panehan Pasca Sarjana Lantai 1,
                        Jl. Telekomunikasi Terusan Buah Batu,
                        Bandung - 40257, Indonesia</p>
                </div>
                <div class="col-6" style="text-align: center;">
                    <div class="container" style="background-color: #ffffff; padding: 20px; border-radius: 10px;">
                        <p class="fw-normal" style="font-weight: bold">
                            Jenis Fasilitas Yang Bisa Anda Sewa
                        </p>
                        <div class="row">
                            <div class="col">
                                <img src="/Assets/gedung.png" alt="" style="max-width: 70px;"> <br>
                                Gedung
                            </div>
                            <div class="col">
                                <img src="/Assets/kelas.png" alt="" style="max-width: 70px;"><br>
                                Kelas
                            </div>
                            <div class="col">
                                <img src="/Assets/olahraga.png" alt="" style="max-width: 70px;"> <br>
                                Olahraga
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col me-3" style="text-align: end; color: white">
                    <p class="fw-bold">Contact Us</p>
                    <p class="m-0">E-Mail: clove@telkomuniversity.ac.id </p>
                    <p class="m-0">WhatsApp Khusus Dosen: +62 821-1666-3563 </p>
                    <p class="m-0">WhatsApp Khusus Mahasiswa: +62 812-2200-1813 </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
        z-index: 0;
    }
</style>

<?= $this->endSection(); ?>