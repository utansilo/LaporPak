<style>
    .card {
        height: 35px;
    }
</style>

<div class="mb-4">
    <p class="mt-4">Page / <span>Admin</span> </p>
    <h1>Halo, Admin!</h1>
</div>

<div class="card-lapor" style="margin-top: 50px;">
    <h2 style="margin-bottom: 30px;">My Report</h2>
    <table class="table table-bordered">
        <tr>
            <th style="width: 15%;">Nama Laporan</th>
            <th style="width: 15%;">Jenis</th>
            <th style="width: 15%;">Status</th>
            <th style="width: 35%;">Deskripsi</th>
            <th style="width: 20%;">Action</th>
        </tr>
        <?php foreach ($laporan as $l) : ?>
            <?php
                $status = $l['status'] ?: 'Sending'; // Set default value sebagai "Sending" jika status kosong
                $cardClass = '';

                switch ($status) {
                    case 'Acc':
                        $cardClass = 'bg-success';
                        break;
                    case 'Review':
                        $cardClass = 'bg-primary';
                        break;
                    case 'Rejected':
                        $cardClass = 'bg-danger';
                        break;
                    default:
                        $cardClass = 'bg-warning';
                        break;
                }
            ?>
            <tr>
                <td><?= $l['nlaporan']; ?></td>
                <td><?= $l['jlaporan']; ?></td>
                <td>
                    <div class="card pt-1 text-center text-white <?= $cardClass; ?>">
                        <?= $status; ?>
                    </div>
                </td>
                <td><?= $l['deskripsi']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?= $l['id']; ?>">
                        Review
                    </button>
                    <a class="btn btn-danger text-decoration-none" href="<?= base_url('laporan/delete/' . $l['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <div class="modal fade" id="myModal<?= $l['id']; ?>" tabindex="-1" aria-labelledby="popup1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="popup1Label">Data Laporan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="data">
                                <label for="prodi">Prodi : </label>
                                <p><?= $l['prodi']?></p>
                            </div>
                            <div class="data">
                                <label for="prodi">Ditujukan : </label>
                                <p><?= $l['nerima']?></p>
                            </div>
                            <div class="data">
                                <label for="prodi">Isi laporan : </label>
                                <p><?= $l['isian']?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#myModal2<?= $l['id']; ?>">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal2<?= $l['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form input -->
                            <form method="post" action="<?= base_url('laporan/admin/'. $l['id']); ?>">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="status" name="status" class="form-select" aria-label="Default select example">
                                        <option value="Acc">Acc</option>
                                        <option value="Review">Review</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control isian-form" id="deskripsi" name="deskripsi" placeholder="0/300 WORDS" cols="30" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            <!-- Tambahan input lainnya -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Pop-up modal -->
        
    </table>
</div>