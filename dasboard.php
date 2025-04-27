<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Status Obat - RS Sehat Sentosa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style_index.css">
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 mb-0">RS Makassar</h1>
                    <p class="lead mb-0">Manajemen Status Obat</p>
                </div>
                <div class="col-md-4 text-end">
                    <div id="current-time" class="display-6"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card card-queue">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">
                            <i class="fas fa-pills me-2"></i>INPUT STATUS OBAT
                        </h3>

                        <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label for="no_rekam_medis" class="form-label">Nomor Rekam Medis</label>
                                <input type="text" class="form-control form-control-lg" id="no_rekam_medis" 
                                       name="no_rekam_medis" required>
                            </div>

                            <div class="mb-3">
                                <label for="nama_pasien" class="form-label">Nama Pasien</label>
                                <input type="text" class="form-control form-control-lg" id="nama_pasien" 
                                       name="nama_pasien" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori_obat" class="form-label">Kategori Obat</label>
                                <select class="form-select form-select-lg" id="kategori_obat" name="kategori_obat" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Obat">Obat</option>
                                    <option value="Racikan">Obat Racikan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="kategori_obat" class="form-label">Kategori</label>
                                <select class="form-select form-select-lg" id="kategori_obat" name="kategori_obat" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Proses">Proses</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Terima">Diterima</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    <i class="fas fa-save me-2"></i>SIMPAN DATA
                                </button>
                                <a href="daftar_obat.php" class="btn btn-lg btn-outline-secondary">
                                    <i class="fas fa-list me-2"></i>LIHAT DAFTAR
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Update waktu real-time
        function updateTime() {
            const now = new Date();
            document.getElementById('current-time').textContent = 
                now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>
</html>