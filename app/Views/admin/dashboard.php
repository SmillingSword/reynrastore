<!-- app/Views/admin/dashboard.php -->
<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
  <div class="row mb-4">
    <div class="col">
      <h3 class="text-gradient fw-bold">Dashboard Admin</h3>
      <p class="text-light-emphasis">Selamat datang di panel kontrol Reynra Store.</p>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-md-3">
      <div class="card border-neon shadow-neon text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Total Pengguna</h5>
          <h2 class="fw-bold text-gradient">1,253</h2>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-neon shadow-neon text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Transaksi Hari Ini</h5>
          <h2 class="fw-bold text-gradient">128</h2>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-neon shadow-neon text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Saldo Masuk</h5>
          <h2 class="fw-bold text-gradient">Rp1.250.000</h2>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-neon shadow-neon text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Produk Aktif</h5>
          <h2 class="fw-bold text-gradient">45</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col">
      <div class="card bg-dark border-neon text-white">
        <div class="card-header border-bottom border-pink">
          <h5 class="text-gradient m-0">Riwayat Transaksi Terbaru</h5>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-dark table-hover mb-0">
              <thead class="text-gradient">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Pengguna</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#TRX001</td>
                  <td>alfa@example.com</td>
                  <td>Mobile Legends</td>
                  <td>Rp50.000</td>
                  <td>18 Jun 2025</td>
                  <td><span class="badge bg-success">Sukses</span></td>
                </tr>
                <!-- Tambah transaksi lainnya -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>