<style>
    .card-profil {
        width: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .name {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .email {
        font-size: 16px;
        color: #555;
    }
    .box {
        border-radius: 8px;
        height: 35px;
    }
    .card {
        height: 35px;
    }
</style>
<div class="mb-4">
    <p class="mt-4">Page / <span>Dashboard</span> </p>
    <h1>Dashboard</h1>
</div>
<div class="card-lapor" style="margin-top: 50px;">
    <h2 style="margin-bottom: 30px;">Reports</h2>
    <table class="table table-bordered">
        <tr>
            <th style="width: 15%;">Nama Laporan</th>
            <th style="width: 15%;">Jenis</th>
            <th style="width: 15%;">Status</th>
            <th style="width: 40%;">Deskripsi</th>
            <th style="width: 15%;">Deskripsi</th>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?= $l['id']; ?>" data-laporan="<?= $l['id']; ?>">
                        Lihat
                    </button>
                    <!-- <a class="btn btn-danger text-decoration-none" href="<?= base_url('laporan/delete/' . $l['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a> -->
                </td>
            </tr>
            <div class="modal fade" id="myModal<?= $l['id']?>" tabindex="-1" aria-labelledby="popup1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="popup1Label">Data Laporan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="data">
                                <label for="prodi">Prodi : </label>
                                <p><?= $l['prodi'];?></p>
                            </div>
                            <div class="data">
                                <label for="prodi">Ditujukan : </label>
                                <p><?= $l['nerima'];?></p>
                            </div>
                            <div class="data">
                                <label for="prodi">Isi laporan : </label>
                                <p><?= $l['isian'];?></p>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </table>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('[data-laporan]').on('click', function() {
            var laporanId = $(this).data('laporan');
            var modalId = '#myModal' + laporanId;
            $(modalId).modal('show');
        });
    });
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('[data-laporan]');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                const laporanId = this.getAttribute('data-laporan');
                const modalId = '#myModal${laporanId}';
                const modal = document.querySelector(modalId);
                if (modal) {
                    const bsModal = new bootstrap.Modal(modal);
                    bsModal.show();
                }
            });
        });
    });
</script>