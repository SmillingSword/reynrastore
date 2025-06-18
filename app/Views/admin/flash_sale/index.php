<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-gradient fw-bold">Flash Sale</h4>
    <button class="btn btn-neon" data-bs-toggle="modal" data-bs-target="#flashSaleModal">
        <i class="fas fa-plus me-1"></i> Tambah Flash Sale
    </button>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: "<?= session('success') ?>",
        background: '#1a1a1a',
        color: '#fff',
        confirmButtonColor: '#00f0ff'
        });
    </script>
    <?php endif; ?>

    <div class="table-responsive">
    <table class="table table-dark table-bordered align-middle">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Game</th>
            <th>Harga Awal</th>
            <th>Harga Diskon</th>
            <th>Stok</th>
            <th>Berakhir</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($flash_sales as $index => $item): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= esc($item['nama_produk']) ?></td>
            <td><?= esc($item['game']) ?></td>
            <td>Rp <?= number_format($item['harga_awal']) ?></td>
            <td>Rp <?= number_format($item['harga_diskon']) ?></td>
            <td><?= $item['stok'] ?></td>
            <td><?= $item['waktu_berakhir'] ?></td>
            <td>
            <a href="<?= base_url('admin/flash-sale/delete/'.$item['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus item ini?')">
                <i class="fas fa-trash"></i>
            </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<!-- Modal Tambah Flash Sale -->
<div class="modal fade" id="flashSaleModal" tabindex="-1" aria-labelledby="flashSaleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark border border-neon shadow-neon">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title text-gradient">Tambah Flash Sale</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/flash-sale/store') ?>" method="post">
          <?= csrf_field() ?>
          <div class="mb-3">
            <label class="form-label text-white">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control neon-input" required>
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Game</label>
            <input type="text" name="game" class="form-control neon-input" required>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label text-white">Harga Awal</label>
              <input type="number" name="harga_awal" class="form-control neon-input" required>
            </div>
            <div class="col">
              <label class="form-label text-white">Harga Diskon</label>
              <input type="number" name="harga_diskon" class="form-control neon-input" required>
            </div>
          </div>
          <div class="mb-3 mt-3">
            <label class="form-label text-white">Stok</label>
            <input type="number" name="stok" class="form-control neon-input" required>
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Waktu Berakhir</label>
            <input type="datetime-local" name="waktu_berakhir" class="form-control neon-input" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-neon">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
