<!-- Navbar dengan efek neon yang lebih keren dan rapih dan Login Modal -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-neon py-3">
  <div class="container d-flex align-items-center">
    <!-- Logo di kiri -->
    <a class="navbar-brand text-gradient fw-bold me-4" href="#">Reynra Store</a>

    <!-- Collapse Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Content Navbar -->
    <div class="collapse navbar-collapse" id="navContent">
      <!-- Search Bar -->
      <div class="flex-fill position-relative mx-3">
        <input class="form-control neon-input rounded-pill" type="search" placeholder="Cari produk...">
        <button class="btn btn-neon rounded-pill position-absolute end-0 me-2" type="submit" style="top:50%; transform:translateY(-50%);">Cari</button>
      </div>
      <!-- Tombol Login -->
      <button class="btn btn-outline-neon rounded-pill px-4 ms-auto" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
      </button>
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
        <form id="loginForm">
          <div class="mb-3">
            <label for="emailInput" class="form-label text-white">Email</label>
            <input type="email" class="form-control neon-input" id="emailInput" placeholder="email@domain.com" required>
          </div>
          <div class="mb-3">
            <label for="passwordInput" class="form-label text-white">Password</label>
            <input type="password" class="form-control neon-input" id="passwordInput" placeholder="••••••••" required>
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
        <form id="registerForm">
          <div class="mb-3">
            <label for="regEmail" class="form-label text-white">Email</label>
            <input type="email" class="form-control neon-input" id="regEmail" placeholder="email@domain.com" required>
          </div>
          <div class="mb-3">
            <label for="regPassword" class="form-label text-white">Password</label>
            <input type="password" class="form-control neon-input" id="regPassword" placeholder="••••••••" required>
          </div>
          <div class="mb-3">
            <label for="regConfirmPassword" class="form-label text-white">Konfirmasi Password</label>
            <input type="password" class="form-control neon-input" id="regConfirmPassword" placeholder="••••••••" required>
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
