<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero Banner -->
<div class="position-relative mb-5">
  <div class="w-100" style="height: 300px; background-image: url('<?= base_url('uploads/produk/' . $produk['image']) ?>'); background-size: cover; background-position: center;"></div>
  <div class="position-absolute top-100 start-0 translate-middle-y ms-4">
    <img src="<?= base_url('uploads/produk/' . $produk['image']) ?>" alt="<?= $produk['name'] ?>" class="img-thumbnail border-neon shadow" style="width: 100px; height: 100px; object-fit: cover;">
  </div>
</div>

<div class="container">
  <div class="ms-5 ps-5">
    <h2 class="text-gradient mb-1"><?= strtoupper($produk['name']) ?></h2>
    <p class="text-light-emphasis mb-3">Kategori: <?= $produk['kategori'] ?></p>
    <div class="d-flex flex-wrap gap-4">
      <div class="d-flex align-items-center gap-2 text-white"><i class="fas fa-bolt text-pink"></i> Proses Cepat</div>
      <div class="d-flex align-items-center gap-2 text-white"><i class="fas fa-headset text-biru"></i> Layanan Chat 24/7</div>
      <div class="d-flex align-items-center gap-2 text-white"><i class="fas fa-lock text-ungu"></i> Pembayaran Aman!</div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <!-- Step 1: Input ID dan Server -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">1. Masukkan Data Akun</h5>
        <div class="row g-3">
          <div class="col-md-<?= ($produk['brand'] === 'Mobile Legends') ? '6' : '12' ?>">
            <input type="text" id="gameId" class="form-control neon-input" placeholder="Masukkan ID">
          </div>
          <?php if ($produk['brand'] === 'Mobile Legends'): ?>
            <div class="col-md-6">
              <input type="text" id="server" class="form-control neon-input" placeholder="Masukkan Server">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Step 2: Pilih Nominal dari Digiflazz -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon" id="scrollToPayment">
        <h5 class="text-gradient mb-3">2. Pilih Nominal</h5>
        <div class="row g-3">
          <?php foreach ($varian as $key => $item): ?>
            <div class="col-md-4">
              <div class="bg-gradient rounded p-3 bg-dark text-white border border-neon h-100 pilih-nominal" data-nama="<?= esc($item['nama']) ?>" data-harga="<?= ceil($item['harga']) ?>">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <span><?= esc($item['nama']) ?></span>
                </div>
                <div class="fw-bold text-pink">Rp <?= number_format(ceil($item['harga'])) ?></div>
                <button type="button" class="btn btn-outline-neon w-100 mt-2 btn-sm">Pilih</button>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Step 3: Masukkan Jumlah Pembelian -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">3. Masukkan Jumlah Pembelian</h5>
        <div class="d-flex align-items-center gap-3 w-100">
          <button type="button" id="btn-min" class="btn btn-outline-light rounded-circle fw-bold" style="width: 40px; height: 40px;">-</button>
          <input type="number" id="input-jumlah" class="form-control text-center neon-input text-white bg-dark border border-secondary" value="1" min="1" style="height: 40px; font-size: 1.2rem; flex-grow: 1;">
          <button type="button" id="btn-plus" class="btn btn-outline-light rounded-circle fw-bold" style="width: 40px; height: 40px;">+</button>
        </div>
      </div>

      <!-- Step 4: Pilih Pembayaran -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon" id="paymentMethod">
        <h5 class="text-gradient mb-3">4. Pilih Pembayaran</h5>
        <div class="d-flex flex-column gap-3">
          <div id="metode-saldo" class="metode-bayar d-flex justify-content-between align-items-center p-3 bg-secondary rounded text-white cursor-pointer">
            <div class="d-flex align-items-center gap-3">
              <img src="<?= base_url('assets/icons/coin.png') ?>" alt="Saldo" style="width: 32px;">
              <div>
                <div class="fw-bold">Saldo</div>
                <small id="harga-saldo">Harga: -</small>
              </div>
            </div>
            <span class="badge bg-warning text-dark fw-bold">BEST PRICE</span>
          </div>

          <div id="metode-qris" class="metode-bayar d-flex justify-content-between align-items-center p-3 bg-dark rounded text-white border border-secondary cursor-pointer">
            <div class="d-flex align-items-center gap-3">
              <img src="https://cdn.bangjeff.com/gallery/qris-payment1.webp" alt="QRIS" style="width: 32px;">
              <div>
                <div class="fw-bold">QRIS (All Payment)</div>
                <small id="harga-qris">Harga: -</small>
              </div>
            </div>
            <span class="badge bg-warning text-dark fw-bold">BEST PRICE</span>
          </div>
        </div>
      </div>

      <!-- Step 5: Kontak -->
      <div class="p-3 mb-4 rounded shadow-neon bg-dark border border-neon">
        <h5 class="text-gradient mb-3">5. Detail Kontak</h5>
        <div class="mb-3">
          <label class="form-label text-white">No. WhatsApp Aktif</label>
          <input type="text" class="form-control neon-input" id="waNumber" placeholder="08xxxxxxxxxx">
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
        <button id="btnCheckout" class="btn btn-primary w-100">
          <i class="fas fa-shopping-bag me-2"></i> Pesan Sekarang
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white border border-neon rounded-4 shadow-lg">
      <div class="modal-header border-0">
        <h5 class="modal-title">Konfirmasi Pembelian</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <p class="mb-2">Game: <strong class="text-info" id="confGame"><?= $produk['name'] ?></strong></p>
        <p class="mb-2">Nickname: <strong id="confNick">-</strong></p>
        <p class="mb-2">Nominal: <strong id="confNominal">-</strong></p>
        <p class="mb-2">Harga: <strong class="text-pink" id="confHarga">-</strong></p>
        <p class="mb-2">Metode Bayar: <strong id="confMetode">Saldo</strong></p>
        <button class="btn btn-outline-neon mt-3 w-100" id="btnLanjutQRIS">Lanjutkan Pembayaran</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal QRIS -->
<div class="modal fade" id="modalQRIS" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white border border-neon rounded-4 shadow-lg">
      <div class="modal-header border-0">
        <h5 class="modal-title">Scan QRIS</h5>
      </div>
      <div class="modal-body text-center">
        <img src="<?= base_url('uploads/qris.jpg') ?>" id="qrisImage" class="img-fluid rounded mb-3" alt="QR Code">
        <p class="mt-3">Gunakan OVO, DANA, GoPay, atau aplikasi QRIS lainnya.</p>
        <div class="mt-3 fw-bold">Total Bayar: <span class="text-pink" id="qrisHarga">Rp -</span></div>
        <div id="statusBayar" class="text-warning">Menunggu pembayaran...</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Struk -->
<div class="modal fade" id="modalStruk" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white border border-neon rounded-4 shadow-lg">
      <div class="modal-header border-0">
        <h5 class="modal-title">Struk Pembelian</h5>
      </div>
      <div class="modal-body text-start">
        <p>ID Game: <strong id="strukId">-</strong></p>
        <p>Nominal: <strong id="strukNominal">-</strong></p>
        <p>Harga: <strong id="strukHarga">-</strong></p>
        <p>Metode: <strong id="strukMetode">Saldo</strong></p>
        <p>Status: <strong id="strukStatus" class="text-warning">Pending...</strong></p>
      </div>
    </div>
  </div>
</div>

<script>
  let selectedNominal = '', selectedHarga = '', jumlah = 1;
  let selectedMethod = 'QRIS';

  const isLoggedIn = <?= session()->get('isLoggedIn') ? 'true' : 'false' ?>;

  // PILIH NOMINAL
  document.querySelectorAll('.pilih-nominal').forEach(card => {
  card.querySelector('button').addEventListener('click', () => {
    document.querySelectorAll('.pilih-nominal').forEach(c => c.classList.remove('shadow-glow', 'border-primary'));
    card.classList.add('shadow-glow', 'border-primary');

      selectedNominal = card.dataset.nama;
      selectedHarga = card.dataset.harga;

      document.getElementById('harga-saldo').textContent = 'Harga: Rp ' + new Intl.NumberFormat().format(selectedHarga);
      document.getElementById('harga-qris').textContent = 'Harga: Rp ' + new Intl.NumberFormat().format(selectedHarga);

      // Scroll ke metode bayar
      document.getElementById('paymentMethod').scrollIntoView({ behavior: 'smooth' });
    });
  });

  // PILIH METODE BAYAR
  document.querySelectorAll('.metode-bayar').forEach(item => {
    item.addEventListener('click', () => {
      if (!isLoggedIn && item.id === 'metode-saldo') return;

      document.querySelectorAll('.metode-bayar').forEach(el => el.classList.remove('border-primary'));
      item.classList.add('border-primary');

      selectedMethod = item.id === 'metode-saldo' ? 'Saldo' : 'QRIS';
    });
  });

  // CHECKOUT
  document.getElementById("btnCheckout").addEventListener("click", function () {
    const nickname = document.getElementById("gameId").value.trim();
    const wa = document.getElementById("waNumber").value.trim();
    jumlah = document.getElementById("input-jumlah").value;

    // VALIDASI
    if (!selectedNominal) {
      return Swal.fire({
        icon: 'warning',
        title: 'Nominal Belum Dipilih!',
        text: 'Pilih salah satu nominal terlebih dahulu.',
        background: '#0e0e0e',
        color: '#fff',
        iconColor: '#ffcc00',
        confirmButtonColor: '#00ffff',
        confirmButtonText: 'Oke!',
        customClass: { popup: 'border border-warning shadow' }
      });
    }

    if (!nickname) {
      return Swal.fire({
        icon: 'warning',
        title: 'ID Game Kosong!',
        text: 'Mohon isi ID game kamu dulu.',
        background: '#0e0e0e',
        color: '#fff',
        iconColor: '#ffcc00',
        confirmButtonColor: '#00ffff',
        confirmButtonText: 'Oke!',
        customClass: { popup: 'border border-warning shadow' }
      });
    }

    if (!selectedMethod) {
      return Swal.fire({
        icon: 'warning',
        title: 'Metode Belum Dipilih!',
        text: 'Pilih metode pembayaran yang kamu inginkan.',
        background: '#0e0e0e',
        color: '#fff',
        iconColor: '#ffcc00',
        confirmButtonColor: '#00ffff',
        confirmButtonText: 'Pilih Sekarang',
        customClass: { popup: 'border border-warning shadow' }
      });
    }

    if (!wa || !wa.startsWith("08")) {
      return Swal.fire({
        icon: 'warning',
        title: 'No. WhatsApp Tidak Valid!',
        text: 'Isi nomor WA yang aktif dengan format 08xxxxxxxxxx.',
        background: '#0e0e0e',
        color: '#fff',
        iconColor: '#ffcc00',
        confirmButtonColor: '#00ffff',
        confirmButtonText: 'Cek Lagi',
        customClass: { popup: 'border border-warning shadow' }
      });
    }

    // SET KE MODAL KONFIRMASI
    document.getElementById("confNick").textContent = nickname;
    document.getElementById("strukId").textContent = nickname;
    document.getElementById("strukNominal").textContent = selectedNominal;
    document.getElementById("strukHarga").textContent = 'Rp ' + new Intl.NumberFormat().format(selectedHarga);
    document.getElementById("confGame").textContent = "<?= $produk['name'] ?>";
    document.getElementById("confHarga").textContent = 'Rp ' + new Intl.NumberFormat().format(selectedHarga);
    document.getElementById("confNominal").textContent = selectedNominal;
    document.getElementById("confMetode").textContent = selectedMethod;

    // LANJUT QRIS ATAU CEK SALDO
    if (selectedMethod === 'QRIS') {
      new bootstrap.Modal(document.getElementById("modalKonfirmasi")).show();
    } else {
      fetch("<?= base_url('payment/saldo') ?>", {
        method: "POST",
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ price: selectedHarga })
      }).then(res => res.json())
      .then(res => {
        if (res.success) {
          document.getElementById("strukStatus").textContent = "SUKSES";
          document.getElementById("strukStatus").classList.remove("text-warning");
          document.getElementById("strukStatus").classList.add("text-success");
          document.getElementById("strukMetode").textContent = "Saldo";
          new bootstrap.Modal(document.getElementById("modalStruk")).show();
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Saldo Tidak Cukup!',
            html: `<strong>${res.message}</strong>`,
            background: '#0e0e0e',
            color: '#fff',
            iconColor: '#ff00c8',
            confirmButtonColor: '#ff00c8',
            confirmButtonText: 'Isi Dulu 😢',
            customClass: {
              popup: 'border border-pink shadow'
            }
          });
        }
      });
    }
  });

  // LANJUT QRIS
  document.getElementById("btnLanjutQRIS").addEventListener("click", function () {
    bootstrap.Modal.getInstance(document.getElementById("modalKonfirmasi")).hide();

    fetch("<?= base_url('payment/bayarQris') ?>", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({ nominal: selectedHarga })
    })
    .then(res => res.json())
    .then(res => {
      if (res.success) {
        const qrImage = res.qris_link;
        document.querySelector("#modalQRIS img").src = qrImage;

        const modalQR = new bootstrap.Modal(document.getElementById("modalQRIS"));
        modalQR.show();

        setTimeout(() => {
          modalQR.hide();
          document.getElementById("strukStatus").textContent = "SUKSES";
          document.getElementById("strukStatus").classList.remove("text-warning");
          document.getElementById("strukStatus").classList.add("text-success");
          document.getElementById("strukMetode").textContent = "QRIS";
          new bootstrap.Modal(document.getElementById("modalStruk")).show();
        }, 6000);
      } else {
        Swal.fire({
          icon: 'error',
          title: 'QRIS Gagal Dibuat',
          html: `<strong>${res.message}</strong>`,
          background: '#0e0e0e',
          color: '#fff',
          iconColor: '#ff00c8',
          confirmButtonColor: '#ff00c8',
          confirmButtonText: 'Oke',
          customClass: {
            popup: 'border border-pink shadow'
          }
        });
      }
    });
  });



  // +/- JUMLAH
  document.getElementById("btn-min")?.addEventListener("click", () => {
    const input = document.getElementById("input-jumlah");
    let val = parseInt(input.value);
    if (val > 1) input.value = val - 1;
  });

  document.getElementById("btn-plus")?.addEventListener("click", () => {
    const input = document.getElementById("input-jumlah");
    let val = parseInt(input.value);
    input.value = val + 1;
  });

  // NONAKTIFKAN SALDO
  if (!isLoggedIn) {
    const el = document.getElementById('metode-saldo');
    el.classList.add('opacity-50');
    el.style.pointerEvents = 'none';
  }

  document.addEventListener("DOMContentLoaded", function () {
  const metodeBayarEls = document.querySelectorAll('.metode-bayar');

  metodeBayarEls.forEach(item => {
    item.addEventListener('click', () => {
      if (!isLoggedIn && item.id === 'metode-saldo') return;

      metodeBayarEls.forEach(el => el.classList.remove('border-primary', 'shadow-glow'));
      item.classList.add('border-primary', 'shadow-glow');

      selectedMethod = item.id === 'metode-saldo' ? 'Saldo' : 'QRIS';
      document.getElementById('confMetode').textContent = selectedMethod;
      document.getElementById('strukMetode').textContent = selectedMethod;
    });
  });
});

</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const metodeBayarEls = document.querySelectorAll('.metode-bayar');

    metodeBayarEls.forEach(item => {
      item.addEventListener('click', () => {
        if (!isLoggedIn && item.id === 'metode-saldo') return;

        metodeBayarEls.forEach(el => el.classList.remove('shadow-glow', 'border-primary'));
        item.classList.add('shadow-glow', 'border-primary');

        selectedMethod = item.id === 'metode-saldo' ? 'Saldo' : 'QRIS';

        // update tampilan di konfirmasi dan struk
        document.getElementById('confMetode').textContent = selectedMethod;
        document.getElementById('strukMetode').textContent = selectedMethod;
      });
    });

    // kalau user belum login, matiin metode saldo
    if (!isLoggedIn) {
      document.getElementById('metode-saldo').classList.add('opacity-50');
      document.getElementById('metode-saldo').style.pointerEvents = 'none';
    }
  });
</script>




<?= $this->endSection() ?>