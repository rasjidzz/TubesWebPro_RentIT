<?= $this->extend('layout/template_nonAuth'); ?>

<?= $this->section('content'); ?>



<!-- <section class="mt-5">
    <div class="container">
        <h1>test</h1>

    </div>
</section> -->

<section class="mt-5">

    <div class="container position-relative rounded-3 " style=" display:flex; justify-content: center;  background-image: url('/Assets/GKU.jpg'); background-size: cover; height: 70vh; font-family: 'Open Sans', sans-serif;">
        <div class="overlay rounded-3">
            <div class="row">
                <div class="mt-5" style="text-align: center; color: white;">
                    <h1 style="font-weight: bold; color: white;">SELAMAT DATANG, MAU SEWA FASILITAS ?</h1>
                    <h1 style="font-weight: bold; color: white;">MASUK PAKAI AKUN SSO DULU YUK ?</h1>
                </div>
            </div>
            <div class="row">
                <div class="mt-5" style="text-align: center;">
                    <h1 style="color: white;">Sign In</h1>
                </div>
                <div class="mt-3" style="text-align: center;">
                    <!-- <button class="btn btn-secondary">Connect with office 365</button> -->
                    <button class="btn btn-light" style="width: 400px;">
                        <img src="/Assets/365Logo.png" alt="Office 365 Logo" style="max-width: 20px; margin-right: 5px;">
                        Connect with Office 365
                    </button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col" style="text-align: center; color: white;">adsadaa</div>
                <div class="col-6" style="text-align: center;">
                    <div class="container" style="background-color: #f0f0f0; padding: 20px;">
                        <p class="fw-normal" style="font-weight: bold">
                            Jenis Fasilitas Yang Bisa Anda Sewa
                        </p>
                        <div class="row">
                            <div class="col">
                                Gedung
                            </div>
                            <div class="col">
                                Kelas
                            </div>
                            <div class="col">
                                Olahraga
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="text-align: center; color: white">asdadasd</div>
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