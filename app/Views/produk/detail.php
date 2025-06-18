<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero Banner -->
<div class="position-relative mb-5">
  <!-- Banner Background -->
  <div class="w-100" style="height: 300px; background-image: url('<?= base_url('uploads/produk/' . $produk['image']) ?>'); background-size: cover; background-position: center;"></div>

  <!-- Logo Game -->
  <div class="position-absolute top-100 start-0 translate-middle-y ms-4">
    <img src="<?= base_url('uploads/produk/' . $produk['image']) ?>" alt="<?= $produk['name'] ?>" class="img-thumbnail border-neon shadow" style="width: 100px; height: 100px; object-fit: cover;">
  </div>
</div>

<!-- Informasi Game -->
<div class="container">
  <div class="ms-5 ps-5">
    <h2 class="text-gradient mb-1"><?= strtoupper($produk['name']) ?></h2>
    <p class="text-light-emphasis mb-3">Kategori: <?= $produk['kategori'] ?></p>

    <div class="d-flex flex-wrap gap-4">
      <div class="d-flex align-items-center gap-2 text-white">
        <i class="fas fa-bolt text-pink"></i> Proses Cepat
      </div>
      <div class="d-flex align-items-center gap-2 text-white">
        <i class="fas fa-headset text-biru"></i> Layanan Chat 24/7
      </div>
      <div class="d-flex align-items-center gap-2 text-white">
        <i class="fas fa-lock text-ungu"></i> Pembayaran Aman!
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <!-- KIRI: Form Transaksi -->
    <div class="col-md-8">

      <!-- Step 1: Masukkan Data Akun -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">1. Masukkan Data Akun</h5>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label text-white">ID</label>
            <input type="text" class="form-control neon-input" placeholder="Masukkan ID">
          </div>
          <div class="col-md-6">
            <label class="form-label text-white">Server</label>
            <input type="text" class="form-control neon-input" placeholder="Masukkan Server">
          </div>
        </div>
      </div>

      <!-- Step 2: Pilih Nominal -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">2. Pilih Nominal</h5>

        <div class="row g-3">
          <?php foreach ($varian ?? [] as $item): ?>
            <div class="col-md-4">
              <div class="bg-gradient rounded p-3 bg-dark text-white border border-neon h-100">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <span><?= esc($item['nama']) ?></span>
                </div>
                <div class="fw-bold text-pink">Rp <?= number_format(ceil($item['harga'])) ?></div>
                <button class="btn btn-outline-neon w-100 mt-2 btn-sm">Pilih</button>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Step 3: Jumlah Pembelian -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">3. Masukkan Jumlah Pembelian</h5>
        <div class="input-group w-50">
          <button class="btn btn-outline-neon" type="button">-</button>
          <input type="number" class="form-control neon-input text-center" value="1" min="1">
          <button class="btn btn-outline-neon" type="button">+</button>
        </div>
      </div>

      <!-- Step 4: Pilih Pembayaran -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">4. Pilih Pembayaran</h5>
        <div class="mb-3">
          <label class="form-label text-white">Pilih Metode</label>
          <select class="form-select neon-input">
            <option>QRIS (OVO, DANA, GoPay, dll)</option>
            <option>Virtual Account (BCA, BNI, Mandiri, dll)</option>
          </select>
        </div>
        <div class="d-flex flex-wrap gap-2 mt-3">
          <img src="<?= base_url('assets/payment/qris.png') ?>" height="32" alt="QRIS">
          <img src="<?= base_url('assets/payment/bca.png') ?>" height="32" alt="BCA">
          <img src="<?= base_url('assets/payment/ovo.png') ?>" height="32" alt="OVO">
          <img src="<?= base_url('assets/payment/alfamart.png') ?>" height="32" alt="Alfamart">
        </div>
      </div>

      <!-- Step 5: Detail Kontak -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">5. Detail Kontak</h5>
        <div class="mb-3">
          <label class="form-label text-white">No. WhatsApp Aktif</label>
          <input type="text" class="form-control neon-input" placeholder="08xxxxxxxxxx">
        </div>
      </div>

    </div>

    <!-- KANAN: Sticky Info & Checkout -->
    <div class="col-md-4">
      <div class="position-sticky" style="top: 100px; z-index: 10;">

        <div class="bg-dark rounded p-3 border border-neon shadow-neon mb-3">
          <h5 class="text-white">Ulasan dan Rating</h5>
          <div class="d-flex align-items-center">
            <span class="display-5 fw-bold text-white me-2">4.99</span>
            <div>
              <?php for ($i = 0; $i < 5; $i++): ?>
                <i class="fas fa-star text-warning"></i>
              <?php endfor; ?>
              <p class="small text-light-emphasis mb-0">Berdasarkan 5.47jt rating</p>
            </div>
          </div>
        </div>

        <div class="bg-dark rounded p-3 border border-neon shadow-neon mb-3">
          <p class="text-white mb-1 fw-bold">Butuh Bantuan?</p>
          <p class="text-light-emphasis mb-0">Hubungi admin di sini.</p>
        </div>

        <div class="bg-dark rounded p-3 border border-neon shadow-neon mb-3 text-light-emphasis text-center">
          Belum ada item produk yang dipilih.
        </div>

        <button class="btn btn-secondary w-100" disabled>
          <i class="fas fa-shopping-bag me-2"></i> Pesan Sekarang!
        </button>

      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>
