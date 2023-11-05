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
        <div class="row" style="margin-bottom: 50px;">
            <div class="col">
                <div class="card mb-3 text-center" style="background-color: #9F1521; border-radius: 20px;">
                    <div class="card-body">
                        <a class="btn" id="ck" onclick="openModal()" style=" 
            color: rgb(255, 255, 255);
            font-weight: bold;
            margin: 40px;
            border-radius: 10px;
            font-size: 25px;
            height: auto;
            width: auto;
            ">
                            Transfer Bank
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3" style="background-color:#0096B9; border-radius: 20px;">
                    <div class="card-body">
                        <a class="btn" href="https://gopay.co.id/" style="
            color: black;
            font-weight: bold;
            margin: 39px;
            border-radius: 25px;
            font-size: 25px;
            ">
                            <img src="/Assets/GopayLogo.png" alt="GOPAY">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3" style="background-color: #ECE8E8; border-radius: 20px;">
                    <div class="card-body">
                        <a class="btn" href="https://www.ovo.id/" style="
            color: black;
            font-weight: bold;
            margin: 32px;
            border-radius: 25px;
            font-size: 25px;
            ">
                            <img src="/Assets/OVOLogo.png" alt="OVO">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card custon-card mb-3 text-center" style="background-color: #0F2337; border-radius: 20px;">
                    <div class="card-body">
                        <a class="btn" href="https://www.dana.id/" style="
            color: rgb(255, 255, 255);
            /* background-color: rgb(255, 255, 255); */
            font-weight: bold;
            margin: 41px;
            border-radius: 20px;
            font-size: 25px;
            height: 50px;
            width: 200px;
            ">
                            Lainnya
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container align-center">
            <a class="btn btn-danger border-3 rounded-5 text-center mb-5" id="ck" onclick="openModal()">Chechkout</a>
        </div> -->

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
                        <button type="button" class="btn btn-primary">Lanjut Bayar</button>
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