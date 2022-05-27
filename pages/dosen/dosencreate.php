<h2>Tambah Data Dosen</h2>
<?php
print_r($_POST);
if (isset($_POST['button_simpan'])) {
    $nama_dosen = $_POST['nama_dosen'];
    $handphone = $_POST['handphone'];
    $email = $_POST['email'];
}
?>

<div class="row">
    <form action="action" method="post">
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
        </div>
        <div class="mb-3">
            <label for="handphone" class="form-label">Handphone</label>
            <input type="text" class="form-control" id="handphone" name="handphone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <button type="submit" class="btn btn-success" name="button_simpan">Simpan</button>
    </form>    

</div>
