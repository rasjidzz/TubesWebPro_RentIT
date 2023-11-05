<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container">
        <h1 class="text-center fw-bold" style="margin-bottom: 10%; margin-top: 5%;">PEMBAYARAN</h1>
        <div class="row">
            <div class="col">
                <div class="auto" style="margin-bottom: 10%;">
                    <h2 style="font-size: 25px; font-weight: bold;">Fasilitas Yang Dipinjam</h2>
                    <div class="d-flex" style="background-color: #ECE8E8;">
                        <img src="Assets/GKU.jpg" heigth="" width="200px" class="w-20" alt="GKU" />
                        <div class="my-auto ms-2">
                            <h2 class="fs-2 fw-3" style="margin-bottom: 5%;">Gedung kuliah umum</h2>
                            <h3 style="color: #9F1521; font-weight: 400; font-size: 25px;">Rp 500.000.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 style="font-size: 25px; font-weight: bold;">Metode Pembayaran</h2>

        <div class="modal" tabindex="-1" id="BankOPT">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bank Options</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Silakan Pilih Bank Yang Ingin Anda Gunakan</p>
                        <button type="button" class="btn btn-info">BCA</button>
                        <button type="button" class="btn btn-primary">Mandiri</button>
                        <button type="button" class="btn btn-success">BSI</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <a type="button" class="btn btn-primary" href= "<?= base_url('/pembayaran2') ?>">Lanjut Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-evenly mt-3 mb-5">
        <div class="row">
            <div class="col">
                <div class="card mb-3 h-100 w-100" data-bs-toggle="modal" data-bs-target="#BankOPT" style="background-color: #FFF6F6;">
                    <div class="card-body d-flex align-items-center justify-content-center mx-4">
                        <p class="card-text" style="font-weight: bold; color: #9F1521">Transfer Bank
                    </p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col">
                <a href="https://gopay.co.id/" target="_blank">
                    <div class="card mb-3 h-100 w-100" style="background-color:#0096B9">
                        <div class="card-body d-flex align-items-center justify-content-center mx-2">
                            <img src="/Assets/GopayLogo.png" alt="Gopay">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    
        <div class="row">
            <div class="col">
                <a href="https://www.ovo.id/" target="_blank">
                    <div class="card mb-3 h-100 w-100" style="background-color: #ECE8E8">
                        <div class="card-body d-flex align-items-center justify-content-center mx-2">
                            <img src="/Assets/OvoLogo.png" alt="Ovo">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    
        <div class="row">
            <div class="col">
                <div class="card mb-3 h-100 w-100" style="background-color: #0F2337;">
                    <div class="card-body d-flex align-items-center justify-content-center mx-5">
                        <p class="card-text" style="color: antiquewhite; font-weight: bold">Lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <script>
        function openModal() {
            $('#BankOPT').modal('show');
        }
        openModal();
    </script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");

        /* .btn-custom {
            background-color: #9F1521;
            transition: 0.3s;
        } */

        /* #ck {
            background-color: #d01d2b;
            color: #ECE8E8;
            border-radius: 15px;
            height: 50px;
            width: 130px;
            font-weight: bold;
            line-height: 33px;
            margin-left: 1155px;
        }

        #ck:hover {
            background-color: #9F1521;
            transition-duration: 0.3s;
        } */
    </style>
</section>
<?= $this->endSection(); ?>

