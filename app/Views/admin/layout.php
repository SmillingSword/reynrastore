<?php $uri = service('uri'); ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Reynra Store</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
    --biru-neon: #00f0ff;
    --pink-neon: #ff00c8;
    }

    body {
      background-color: #0e0e0e;
      color: #fff;
    }
    .sidebar {
      background: #111;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 220px;
      padding-top: 60px;
      box-shadow: 0 0 20px #00f0ff;
    }
    .sidebar a {
      color: #ccc;
      text-decoration: none;
      display: block;
      padding: 12px 20px;
      transition: 0.2s;
    }
    .sidebar a:hover, .sidebar a.active {
      background: #1b1b1b;
      color: #00f0ff;
    }
    .content {
      margin-left: 220px;
      padding: 40px 20px;
    }
    .card {
      background: #1a1a1a;
      border: none;
      border-left: 4px solid #00f0ff;
      box-shadow: 0 0 10px #00f0ff55;
      color: #fff;
    }
    .card h5 {
      color: #00f0ff;
    }
    .table td, .table th {
      color: #ccc;
      vertical-align: middle;
    }
    .table th {
      background: #222;
    }
    .btn-neon {
        background: linear-gradient(45deg, var(--biru-neon), var(--pink-neon));
        color: white;
        border: none;
        font-weight: bold;
        padding: 0.5rem 1.25rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 8px var(--biru-neon), 0 0 15px var(--pink-neon);
        transition: all 0.3s ease-in-out;
        }

        .btn-neon:hover {
        transform: scale(1.05);
        box-shadow: 0 0 12px var(--biru-neon), 0 0 25px var(--pink-neon);
        background: linear-gradient(45deg, var(--pink-neon), var(--biru-neon));
        color: black;
        }

  </style>
</head>
<body>
  <div class="sidebar">
    <h4 class="text-center text-gradient fw-bold">Reynra Admin</h4>

    <a href="<?= base_url('admin') ?>" class="<?= $uri->getSegment(2) == '' ? 'active' : '' ?>">
        <i class="fas fa-chart-line me-2"></i> Dashboard
    </a>

    <a href="<?= base_url('admin/promo') ?>" class="<?= $uri->getSegment(2) == 'promo' ? 'active' : '' ?>">
        <i class="fas fa-image me-2"></i> Banner Promo
    </a>

    <a href="<?= base_url('admin/flash-sale') ?>" class="<?= $uri->getSegment(2) == 'flash-sale' ? 'active' : '' ?>">
        <i class="fas fa-bolt me-2"></i> Flash Sale
    </a>

    <a href="<?= base_url('admin/trending') ?>" class="<?= uri_string() == 'admin/trending' ? 'active' : '' ?>">
        <i class="fas fa-fire me-2"></i> Trending
    </a>

    <a href="<?= base_url('admin/produk') ?>" class="<?= $uri->getSegment(2) == 'produk' ? 'active' : '' ?>">
        <i class="fas fa-boxes-stacked me-2"></i> Produk
    </a>

    <a href="<?= base_url('admin/pengguna') ?>" class="<?= $uri->getSegment(2) == 'pengguna' ? 'active' : '' ?>">
        <i class="fas fa-users me-2"></i> Pengguna
    </a>

    <a href="<?= base_url('admin/transaksi') ?>" class="<?= $uri->getSegment(2) == 'transaksi' ? 'active' : '' ?>">
        <i class="fas fa-money-check-alt me-2"></i> Transaksi
    </a>

    <a href="<?= base_url('admin/pengaturan') ?>" class="<?= $uri->getSegment(2) == 'pengaturan' ? 'active' : '' ?>">
        <i class="fas fa-gear me-2"></i> Pengaturan
    </a>
    </div>

  <div class="content">
    <?= $this->renderSection('content') ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
