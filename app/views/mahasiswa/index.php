<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <div class="row">
                <div class="col-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

             <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">Tambah data Mahasiswa</button>

            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs): ?>
                    <li class="list-group-item ">
                        <?= $mhs['nama'] ?>
                        <a onclick="return confirm('yakin?');" href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" class="badge text-bg-danger text-decoration-none float-end">Delete</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary text-decoration-none me-2 float-end">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>   
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah data Mahasiswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                <!-- Nama -->
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" id="inputNama" name="nama" class="form-control">

                <label for="inputNIM" class="form-label">NIM</label>
                <input type="number" name="nim" id="inputNIM" class="form-control">
                
                <label for="inputJurusan" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" id="inputJurusan" name="jurusan">
                    <option selected>Pilih jurusan kamu</option>
                    <option value="Teknik Rekayasa Perangkat Lunak">Teknik Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Rekayasa Komputer">Teknik Rekayasa Komputer</option>
                    <option value="Manajemen Agribisnis">Manajemen Agribisnis</option>
                </select>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>