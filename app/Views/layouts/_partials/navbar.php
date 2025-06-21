<!-- Navbar dengan efek neon yang lebih keren dan rapih dan Login Modal -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-neon py-3">
  <div class="container d-flex align-items-center">
    <!-- Logo di kiri -->
    <a class="navbar-brand text-gradient fw-bold me-4" href="<?= base_url(); ?>">Reynra Store</a>

    <!-- Collapse Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Content Navbar -->
    <div class="collapse navbar-collapse" id="navContent">
      <div class="d-flex flex-column flex-lg-row align-items-center w-100 gap-3">
      <!-- Search Bar -->
      <div class="flex-fill position-relative mx-3">
        <input class="form-control neon-input rounded-pill" type="search" placeholder="Cari produk...">
        <button class="btn btn-neon rounded-pill position-absolute end-0 me-2" type="submit" style="top:50%; transform:translateY(-50%);">Cari</button>
      </div>
      <!-- Tombol Login -->
      <?php if (session()->get('isLoggedIn')): ?>
      <?php
        $userName = explode(' ', session()->get('nama'))[0]; // ambil nama depan
        $initials = strtoupper(substr($userName, 0, 2));
        $saldo = number_format(session()->get('saldo'), 0, ',', '.');
      ?>
      <div class="dropdown">
        <button class="btn text-white fw-bold rounded-circle shadow-neon border border-pink"
                type="button"
                id="userDropdown"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-toggle="tooltip" title="Hi, <?= $userName ?>"
                style="width: 44px; height: 44px; background: linear-gradient(135deg, var(--biru-neon), var(--pink-neon)); box-shadow: 0 0 10px var(--biru-neon), 0 0 15px var(--pink-neon);">
          <?= $initials ?>
        </button>

        <ul class="dropdown-menu dropdown-menu-end bg-dark border-neon shadow" aria-labelledby="userDropdown" style="min-width: 240px;">

          <!-- Nama -->
          <li class="px-3 pt-2 text-white small">Telah masuk sebagai<br><strong><?= $userName ?></strong></li>

          <!-- Divider -->
          <li><hr class="dropdown-divider border-pink my-2"></li>

          <!-- Saldo -->
          <li class="px-3 pb-2 pt-1 text-white small d-flex align-items-center">
            <i class="fas fa-coins text-warning me-2"></i>
            <?= $saldo ?> Coin
          </li>

          <!-- Divider -->
          <li><hr class="dropdown-divider border-pink my-2"></li>

          <!-- Menu -->
          <li>
            <a class="dropdown-item text-white py-2" href="<?= base_url('akun') ?>">
              <i class="fas fa-user-circle me-2"></i>Profile
            </a>
          </li>
          <li>
            <a class="dropdown-item text-white py-2" href="<?= base_url('akun/riwayat') ?>">
              <i class="fas fa-history me-2"></i>Riwayat
            </a>
          </li>

          <!-- Divider sebelum logout -->
          <li><hr class="dropdown-divider border-pink my-2"></li>

          <!-- Logout -->
          <li>
            <a class="dropdown-item text-white py-2" href="<?= base_url('logout') ?>">
              <i class="fas fa-sign-out-alt me-2"></i>Keluar
            </a>
          </li>
        </ul>
      </div>

    <?php else: ?>
      <a href="#" class="btn btn-outline-neon rounded-pill px-4 shadow" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
    <?php endif; ?>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark border border-neon shadow-neon">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title text-gradient" id="loginModalLabel">Masuk ke Reynra Store</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm" action="<?= base_url('login') ?>" method="post">
          <?= csrf_field() ?>
          <div class="mb-3">
            <label for="emailInput" class="form-label text-white">Email</label>
            <input type="email" class="form-control neon-input" id="emailInput" name="emailInput" placeholder="email@domain.com" required>
          </div>
          <div class="mb-3">
            <label for="passwordInput" class="form-label text-white">Password</label>
            <input type="password" class="form-control neon-input" id="passwordInput" name="passwordInput" placeholder="••••••••" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-neon">Masuk</button>
          </div>
        </form>
      </div>
      <div class="modal-footer border-top-0 justify-content-center">
        <small class="text-light-emphasis">Belum punya akun? 
          <a href="#" class="text-gradient" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar di sini</a>
        </small>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark border border-neon shadow-neon">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title text-gradient" id="registerModalLabel">Daftar Akun Baru</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="registerForm" action="<?= base_url('register') ?>" method="post">
          <?= csrf_field() ?>

          <div class="mb-3">
            <label for="regNama" class="form-label text-white">Nama</label>
            <input type="text" class="form-control neon-input" id="regNama" name="regNama" placeholder="Nama lengkap" required>
          </div>

          <div class="mb-3">
            <label for="regNoWa" class="form-label text-white">No. WhatsApp</label>
            <input type="text" class="form-control neon-input" id="regNoWa" name="regNoWa" placeholder="08xxxxxxxxxx" required>
          </div>

          <div class="mb-3">
            <label for="regEmail" class="form-label text-white">Email</label>
            <input type="email" class="form-control neon-input" id="regEmail" name="regEmail" placeholder="email@domain.com" required>
          </div>

          <div class="mb-3">
            <label for="regPassword" class="form-label text-white">Password</label>
            <input type="password" class="form-control neon-input" id="regPassword" name="regPassword" placeholder="••••••••" required>
          </div>

          <div class="mb-3">
            <label for="regConfirmPassword" class="form-label text-white">Konfirmasi Password</label>
            <input type="password" class="form-control neon-input" id="regConfirmPassword" name="regConfirmPassword" placeholder="••••••••" required>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
            <label class="form-check-label text-white" for="termsCheck">
              Saya setuju dengan <a href="#" class="text-gradient">Syarat & Ketentuan</a>
            </label>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-neon">Daftar</button>
          </div>
        </form>

      </div>
      <div class="modal-footer border-top-0 justify-content-center">
        <small class="text-light-emphasis">Sudah punya akun? 
          <a href="#" class="text-gradient" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk di sini</a>
        </small>
      </div>
    </div>
  </div>
</div>

<style>
  /* Tambahan styling untuk modal */
  .modal-content {
    border-radius: 1rem;
  }
  .modal-header .btn-close-white {
    filter: invert(1);
  }
  .form-label {
    font-size: 0.9rem;
  }
  #loginModal .modal-body {
    padding-top: 0;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
<?php if (session()->getFlashdata('success')): ?>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '<?= session()->getFlashdata('success') ?>',
        background: '#0e0e0e',
        color: '#fff',
        iconColor: '#00f0ff',
        confirmButtonColor: '#a900ff',
        confirmButtonText: 'Keren 🔥',
        customClass: {
            popup: 'border border-neon shadow-neon'
        }
    });
<?php elseif (session()->getFlashdata('error')): ?>
    Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        html: `<?= session()->getFlashdata('error') ?>`,
        background: '#0e0e0e',
        color: '#fff',
        iconColor: '#ff00c8',
        confirmButtonColor: '#ff00c8',
        confirmButtonText: 'Oke',
        customClass: {
            popup: 'border border-pink shadow'
        }
    });
<?php endif; ?>
</script>

