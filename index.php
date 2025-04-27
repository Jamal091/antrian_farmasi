<?php
// Data contoh antrian (bisa diganti dengan koneksi database)
$current_queue = [
    'number' => '001',
    'rm' => '0102030405',
    'start_time' => '10:15:32',
];

$next_queue = [
    'number' => '002',
    'estimated_time' => '10:25:00',
    'rm' => '0203040506',
];

$queues = [
    ['number' => '001', 'rm' => '0102030405', 'time' => '10:15:32', 'status' => 'current'],
    ['number' => '002', 'rm' => '0203040506', 'time' => '10:18:45', 'status' => 'waiting'],
    ['number' => '003', 'rm' => '0304050607', 'time' => '10:20:12', 'status' => 'waiting'],
    ['number' => '004', 'rm' => '0405060708', 'time' => '10:22:30', 'status' => 'waiting'],
    ['number' => '005', 'rm' => '0506070809', 'time' => '10:05:21', 'status' => 'waiting'],
    ['number' => '006', 'rm' => '0607080910', 'time' => '10:12:45', 'status' => 'waiting'],
    ['number' => '007', 'rm' => '0203040506', 'time' => '10:18:45', 'status' => 'waiting'],
    ['number' => '008', 'rm' => '0304050607', 'time' => '10:20:12', 'status' => 'waiting'],
    ['number' => '009', 'rm' => '0405060708', 'time' => '10:22:30', 'status' => 'waiting'],
    ['number' => '010', 'rm' => '0506070809', 'time' => '10:05:21', 'status' => 'waiting'],
    ['number' => '011', 'rm' => '0607080910', 'time' => '10:12:45', 'status' => 'waiting']
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMASI</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style_index.css">
    </head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 mb-0">RS MAKASSAR - FARMASI</h1>
                </div>
                <div class="col-md-4 text-end">
                    <div id="current-time" class="display-6"></div>
                    <div id="current-date" class="h5"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="row mb-4">
            <!-- Antrian Saat Ini -->
            <div class="col-lg-6 mb-4">
                <div class="card card-queue next-queue h-100">
                    <div class="card-body text-center py-4">
                        <h2 class="card-title"><i class="fas fa-pills me-2"></i>Antrian Obat</h2>
                        <div class="queue-number"><?= $next_queue['number'] ?></div>
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="badge rounded-pill service-<?= strtolower($next_queue['rm']) ?> badge-service fs-5">
                                <?= $next_queue['rm'] ?>
                            </span>
                        </div>
                        <p class="card-text fs-3"><i class="far fa-clock me-2"></i>Mulai: <?= $current_queue['start_time'] ?></p>
                        <button class="btn btn-light btn-lg mt-3 fs-3 px-5 py-3">
                            <i class="fas fa-bullhorn me-2"></i>PANGGIL BERIKUTNYA
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card card-queue current-queue h-100">
                    <div class="card-body text-center py-4">
                        <h2 class="card-title"><i class="fas fa-pills me-2"></i>SEDANG DILAYANI</h2>
                        <div class="queue-number"><?= $current_queue['number'] ?></div>
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="badge rounded-pill bg-light text-dark fs-5 px-4 py-2">
                                <i class="fas fa-door-open me-2"></i><?= $current_queue['rm'] ?>
                            </span>
                            
                        </div>
                        <p class="card-text fs-3"><i class="far fa-clock me-2"></i>Mulai: <?= $current_queue['start_time'] ?></p>
                    </div>
                </div>
            </div>

            <!-- Antrian Selanjutnya -->
            <div class="col-lg-6 mb-4">
                <div class="card card-queue next-queue h-100">
                    <div class="card-body text-center py-4">
                        <h2 class="card-title"><i class="fas fa-pills me-2"></i>Antrian Obat Racikan</h2>
                        <div class="queue-number"><?= $next_queue['number'] ?></div>
                        <div class="mb-4">
                            <span class="badge rounded-pill service-<?= strtolower($next_queue['rm']) ?> badge-service fs-5">
                                <?= $next_queue['rm'] ?>
                            </span>
                        </div>
                        <p class="card-text fs-3"><i class="far fa-clock me-2"></i>Mulai: <?= $current_queue['start_time'] ?></p>
                        <button class="btn btn-light btn-lg mt-3 fs-3 px-5 py-3">
                            <i class="fas fa-bullhorn me-2"></i>PANGGIL BERIKUTNYA
                        </button>
                    </div>
                </div>
            </div>
        </div>

            <!-- Daftar Antrian -->
                <div class="card card-queue h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="card-title mb-0"><i class="fas fa-clipboard-list me-2"></i>DAFTAR ANTRIAN</h3>
                            <div>
                                <button class="btn btn-lg btn-outline-primary me-2 active">Hari Ini</button>
                                <button class="btn btn-lg btn-outline-secondary">Semua</button>
                            </div>
                        </div>
                        
                        <div class="queue-list">
                            <table class="table table-hover align-middle tv-friendly-text">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3">No. Antrian</th>
                                        <th class="py-3">No Rekam Medis</th>
                                        <th class="py-3">Waktu</th>
                                        <th class="py-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($queues as $queue): ?>
                                    <tr class="<?= $queue['status'] === 'current' ? 'table-success' : ($queue['status'] === 'completed' ? 'table-light' : '') ?>">
                                        <td class="py-3 fw-bold"><?= $queue['number'] ?></td>
                                        <td class="py-3 fw-bold"><?= $queue['rm'] ?></td>
                                        <td class="py-3"><?= $queue['time'] ?></td>
                                        <td class="py-3">
                                            <?php if ($queue['status'] === 'current'): ?>
                                                <span class="badge bg-success badge-status"><i class="fas fa-play-circle me-1"></i> Sedang Dilayani</span>
                                            <?php elseif ($queue['status'] === 'completed'): ?>
                                                <span class="badge bg-secondary badge-status"><i class="fas fa-check-circle me-1"></i> Selesai</span>
                                            <?php else: ?>
                                                <span class="badge bg-warning text-dark badge-status"><i class="fas fa-clock me-1"></i> Menunggu</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script untuk waktu real-time -->
    <script>
        function updateDateTime() {
            const now = new Date();
            
            // Format waktu
            const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
            const formattedTime = now.toLocaleTimeString('id-ID', timeOptions);
            
            // Format tanggal
            const dateOptions = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
            const formattedDate = now.toLocaleDateString('id-ID', dateOptions);
            
            document.getElementById('current-time').textContent = formattedTime;
            document.getElementById('current-date').textContent = formattedDate;
        }
        
        // Update setiap detik
        updateDateTime();
        setInterval(updateDateTime, 1000);
        
        // Auto refresh halaman setiap 1 menit (opsional)
        setTimeout(function() {
            location.reload();
        }, 60000);
    </script>
</body>
</html>