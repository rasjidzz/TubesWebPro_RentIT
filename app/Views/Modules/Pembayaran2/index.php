<?= $this->extend('layout/template_Auth'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid">
    <h1 class="text-center mb-5 mt-5">PEMBAYARAN</h1>
    <div id="component" class="container-fluid w-75 py-3 rounded " style="background-color: #ECE8E8; margin-bottom: 100px;">
        <div class="text-center font-family-Open Sans">
            <p class="text-black fs-3 fw-semibold">Silahkan melakukan pembayaran sebelum</p>
            <p class="text-danger fs-5 fw-semibold" id="tgl_tenggat">06/05/2023</p>
            <p class="text-black fw-bold">Code Virtual Account</p>
            <p class="text-black fw-bold fs-2 rounded py-2" id="no_rek" style=" letter-spacing: 12px; background-color: #FEFEFE;">9999-99999-99999</p>
            <button class="btn btn-outline-secondary" onclick="copyVirtualAccount()">Salin Kode Virtual Account</button>

        </div>
        <p class="px-3 py-2 text-black fs-6 fw-bold font-family-Open Sans">
            Tata cara pembayaran:
            <br>
        <ul>
            <li>Buka m-banking anda</li>
            <li>pilih Virtual Account</li>
            <li>Paste code di atas</li>
            <li>Pastikan jumlah uang sudah sesuai</li>
            <li>Bayar</li>
        </ul>
        </p>
    </div>
</div>

<script>
    function copyVirtualAccount() {
        var virtualAccountCode = document.getElementById("no_rek");
        var tempInput = document.createElement("input");

        // Salin teks ke elemen input sementara
        tempInput.value = virtualAccountCode.innerText;

        // Tambahkan elemen input sementara ke dokumen
        document.body.appendChild(tempInput);

        // Pilih dan salin teks dalam elemen input
        tempInput.select();
        document.execCommand("copy");

        // Hapus elemen input sementara
        document.body.removeChild(tempInput);

        // Beri tahu pengguna bahwa kode virtual account telah disalin
        alert("Kode Virtual Account telah disalin: " + virtualAccountCode.innerText);
    }
</script>


<?= $this->endSection(); ?>