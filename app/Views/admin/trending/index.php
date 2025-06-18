<?php $this->extend('admin/layout'); ?>

<?php $this->section('content'); ?>
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="text-gradient">Data Trending Produk</h3>
    <button class="btn btn-neon" data-bs-toggle="modal" data-bs-target="#modalTambahTrending">
      <i class="fas fa-plus"></i> Tambah Produk Trending
    </button>
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
          <th>Penerbit</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; foreach ($trending as $item): ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= esc($item['nama_produk']) ?></td>
          <td><?= esc($item['penerbit']) ?></td>
          <td><img src="<?= base_url('uploads/trending/' . $item['gambar']) ?>" alt="gambar" width="60"></td>
          <td>
            <form action="<?= base_url('admin/trending/delete/' . $item['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus?')">
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

<!-- Modal Tambah Produk Trending -->
<div class="modal fade" id="modalTambahTrending" tabindex="-1" aria-labelledby="modalTambahTrendingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-white border-neon">
      <div class="modal-header">
        <h5 class="modal-title text-gradient">Tambah Produk Trending</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('admin/trending/create') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <?= csrf_field() ?>
          <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control neon-input" name="nama_produk" required>
          </div>
          <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control neon-input" name="penerbit" required>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control neon-input" name="gambar" accept="image/*" required>
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
