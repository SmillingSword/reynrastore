<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="text-gradient fw-bold">Daftar Banner</h4>
    <button class="btn btn-neon" data-bs-toggle="modal" data-bs-target="#modalTambahBanner">
        <i class="fas fa-plus me-1"></i> Tambah Banner
    </button>
    </div>
  <div class="table-responsive">
    <table class="table table-dark table-bordered align-middle">
      <thead class="table-neon">
        <tr>
          <th>#</th>
          <th>Preview</th>
          <th>URL</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($promos)): ?>
          <?php foreach ($promos as $index => $promo): ?>
            <tr>
              <td><?= $index + 1 ?></td>
              <td>
                <img src="<?= base_url(); ?>uploads/banners/<?= esc($promo['image_path']) ?>" alt="Banner" width="150" class="rounded shadow">
              </td>
              <td class="text-break"><?= esc($promo['image_path']) ?></td>
              <td>
                <form action="<?= base_url('admin/promo/delete/' . $promo['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus banner ini?')">
                  <?= csrf_field() ?>
                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-center">Belum ada banner promo.</td>
          </tr>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Tambah Banner -->
<div class="modal fade" id="modalTambahBanner" tabindex="-1" aria-labelledby="modalTambahBannerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark border-neon shadow-neon">
      <div class="modal-header">
        <h5 class="modal-title text-gradient" id="modalTambahBannerLabel">Tambah Banner Baru</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('admin/promo/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body px-4 py-3">
          <div class="mb-3">
            <label for="banner" class="form-label text-white">Upload Banner</label>
            <input class="form-control" type="file" name="banner" id="banner" required>
          </div>
        </div>
        <div class="modal-footer border-top-0 px-4 pb-4">
          <button type="submit" class="btn btn-neon w-100">Simpan Banner</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if (session()->getFlashdata('success')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Sukses!',
      text: '<?= session()->getFlashdata('success') ?>',
      background: '#0e0e0e',
      color: '#fff',
      iconColor: '#00f0ff',
      confirmButtonColor: '#ff00c8',
      customClass: {
        popup: 'border border-neon shadow-neon'
      }
    });
  </script>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Gagal!',
      text: '<?= session()->getFlashdata('error') ?>',
      background: '#0e0e0e',
      color: '#fff',
      iconColor: '#ff0040',
      confirmButtonColor: '#a900ff',
      customClass: {
        popup: 'border border-neon shadow-neon'
      }
    });
  </script>
<?php endif; ?>


<?= $this->endSection() ?>
