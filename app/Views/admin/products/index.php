<?php $this->extend('admin/layout'); ?>

<?php $this->section('content'); ?>
<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="text-gradient">Data Produk</h3>
    <div class="d-flex gap-2">
      <form action="<?= base_url('admin/produk/get-digiflazz') ?>" method="post">
        <?= csrf_field() ?>
        <button class="btn btn-neon" type="submit">
          <i class="fas fa-cloud-download-alt"></i> Get Produk dari Digiflazz
        </button>
      </form>
      <button class="btn btn-outline-neon" data-bs-toggle="modal" data-bs-target="#modalUploadGambar">
        <i class="fas fa-image"></i> Upload Gambar Produk
      </button>
    </div>
  </div>

  <?php if (session()->getFlashdata('success')): ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '<?= session('success') ?>',
        background: '#111',
        color: '#fff',
        confirmButtonColor: '#00f0ff'
      });
    </script>
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')): ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops!',
        text: '<?= session('error') ?>',
        background: '#111',
        color: '#fff',
        confirmButtonColor: '#ff00c8'
      });
    </script>
  <?php endif; ?>

  <div class="table-responsive">
    <table class="table table-bordered table-dark table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Produk</th>
          <th>Brand</th>
          <th>Gambar</th>
          <th>kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; foreach ($products as $item): ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= esc($item['name']) ?></td>
          <td><?= esc($item['brand']) ?></td>
          <td>
            <?php if ($item['image']): ?>
              <img src="<?= base_url('uploads/produk/' . $item['image']) ?>" alt="image" width="60">
              <form action="<?= base_url('admin/produk/update-gambar') ?>" method="post" enctype="multipart/form-data" class="mt-2">
                <?= csrf_field() ?>
                <input type="hidden" name="produk_id" value="<?= $item['id'] ?>">
                <input type="file" name="image" accept="image/*" class="form-control form-control-sm mb-1">
                <button type="submit" class="btn btn-sm btn-outline-neon w-100">Update</button>
              </form>
            <?php else: ?>
              <span class="text-muted">Belum ada gambar</span>
            <?php endif; ?>
          </td>
          <td><?= esc($item['kategori']) ?></td>
          <td>
            <form action="<?= base_url('admin/produk/delete/' . $item['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus?')">
              <?= csrf_field() ?>
              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Upload Gambar Produk -->
<div class="modal fade" id="modalUploadGambar" tabindex="-1" aria-labelledby="modalUploadGambarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark border border-neon shadow-neon text-white">
      <div class="modal-header">
        <h5 class="modal-title text-gradient" id="modalUploadGambarLabel">Upload Gambar Produk</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('admin/produk/upload-gambar') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <?= csrf_field() ?>
          <div class="mb-3">
            <label for="produk_id" class="form-label">Pilih Produk</label>
            <select name="produk_id" id="produk_id" class="form-select neon-input" required>
              <option value="">-- Pilih Produk --</option>
              <?php foreach ($products as $p): ?>
              <option value="<?= $p['id'] ?>"><?= esc($p['name']) ?> (<?= esc($p['brand']) ?>)</option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control neon-input" name="image" accept="image/*" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-neon">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>
