<?php
if (isset($_SESSION['pesan'])) {
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 mb-4 text-center">FORM PEMINJAMAN TEMPAT DAN BARANG</h2>
        <form >
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="name">
            </div>
            
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" aria-describedby="kelas">
            </div>
            
            <div class="mb-3" >
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis" aria-describedby="nis">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Barang/Tempat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="form-text" id="basic-addon4">Sebutkan barang/tempat yang ingin dipinjam, jika meminjam barang sertakan jumlahnya, jika meminjam tempat sertakan tanggal dan waktu.</div>
            </div>
            <div class="mb-3" >
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="form-text" id="basic-addon4">Sertakan alasan untuk meminjam.</div>
            </div>
            <div class="mb-3" >
            <label for="exampleFormControlTextarea1" class="form-label">Waktu</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="form-text" id="basic-addon4">Sertakan tanggal dan jam peminjaman.</div>
            </div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Saya <b>bertanggung jawab</b> penuh dengan apa yang sedang saya pinjam</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>