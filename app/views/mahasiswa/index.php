<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

             <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">Tambah data Mahasiswa</button>

            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary text-decoration-none">Detail</a>
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
                    <!-- Nama -->
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" id="inputNama" class="form-control">

                    <label for="inputNama" class="form-label">NIM</label>
                    <input type="number" id="inputNama" class="form-control">

                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" id="inputNama" class="form-control">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
                </div>
            </div>