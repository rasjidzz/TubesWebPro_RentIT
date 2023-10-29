<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<section>
<div id="PilihFasilitas" style="border: 2px white; padding: 20px; background-color: white; border-radius: 10px; margin-bottom: 50px;">
    <div class="" style="text-align: center; color: white;">
        <h1 style="font-weight: bold; color: black;">PEMBATALAN</h1>
    <div class="" style="text-align: left; color: white;">
        <h5 style="color: black;">Pesanan Yang Bisa Dibatalkan</h5>
    </div>
</div>

<select class="form-select margin-bottom: 50px" aria-label="Default select example">
  <option selected>Pilih Fasilitas</option>
  <option value="1">Gedung Kuliah Umum</option>
  <option value="2">Telkom University Landmark Tower</option>
  <option value="3">Auditorium</option>
</select>
</div>

<div class="container d-flex border border-dark rounded-2" style="height: 150px;">
    <img src="/Assets/GKU.jpg" class="d-flex p-0 img-fluid" alt="Gedung Kuliah Umum">
    <div class="d-flex flex-column justify-content-center ms-3" style="z-index: 1;">
        <p class="fs-1"style="color: black;">Gedung Kuliah Umum</p>
        <p class="fs-6 text-danger">Rp 500.000</p>
        <p class="fs-6" style="color: black;">23-Agustus-2023</p>
    </div>
</div>






</section>

<section>
        <div class="container border border-1 border-dark rounded-2" style="height: 350px;">
            <h3 id="upload" class="text-center mb-5 fw-normal">Upload Dokumen Pendukung</h3>
            <div class="dropArea" style="position: relative; border: 2px dashed #ccc; padding: 20px; text-align: center; height:150px;">
                <input class="file-input" type="file" accept=".pdf, .docx" id="fileInput" multiple style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                <i id="logoDL" class="fs-1 mdi mdi-arrow-down-box mt-3"></i>
                <br>
                <label for="fileInput" id="inputFile">Click Here Or Drag To Choose Your Files</label>
                <p id="fileList" style="font-size: 14px; display: none;"></p> <!-- Moved the file list inside the dropArea -->
            </div>
            <p id="acc" style="font-size: 12px; color:darkgrey;">Accepted File: .pdf .docx</p>
            <form action="" id="tombol">
                <a class="btn btn-danger mt-3" type="submit" href="<?= base_url('/pembatalan2') ?>">Ajukan Pembatalan</a>
            </form>
        </div>
    </section>

</div>

<script>
    const dropArea = document.querySelector(".dropArea");
    const inputFile = document.querySelector("#fileInput");
    const inputFileLabel = document.querySelector("label[for='fileInput']");
    const fileList = document.querySelector("#fileList");
    const selectedFiles = []; // Menyimpan file yang telah dipilih

    dropArea.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropArea.style.backgroundColor = "#f7f7f7";
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.style.backgroundColor = "transparent";
    });

    dropArea.addEventListener("drop", (e) => {
        e.preventDefault();
        dropArea.style.backgroundColor = "transparent";

        const files = e.dataTransfer.files;

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                selectedFiles.push(files[i]); // Menyimpan file ke dalam array
            }

            displaySelectedFiles();
        }
    });

    inputFile.addEventListener("change", () => {
        const files = inputFile.files;

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                selectedFiles.push(files[i]); // Menyimpan file ke dalam array
            }

            displaySelectedFiles();
        }
        console.log(SelectedFiles);
    });

    function displaySelectedFiles() {
        inputFileLabel.style.display = "none";
        fileList.style.display = "block";
        fileList.innerHTML = ""; // Membersihkan daftar sebelum menambahkan kembali

        for (let i = 0; i < selectedFiles.length; i++) {
            const fileItem = document.createElement("div");
            fileItem.innerText = selectedFiles[i].name;
            fileItem.style.marginBottom = "5px";
            fileItem.style.fontSize = "13px";
            fileList.appendChild(fileItem);
        }

        document.getElementById("logoDL").style.display = "none";
    }
</script>

<style>
    #fileList {
        position: absolute;
        top: 10px;
        left: 10px;
        text-align: left;
    }

    .dropArea {
        overflow: auto;
        max-height: 200px;  
    }

    section{
        margin-bottom: 50PX;
    }
    
</style>

<?= $this->endSection(); ?>