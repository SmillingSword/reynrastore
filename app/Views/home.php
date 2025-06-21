<?php $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Carousel Banner -->
<div id="carouselPromo" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
  <div class="carousel-inner rounded-4 shadow-neon banner-hero">
    <?php foreach ($banners as $index => $banner): ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <img src="<?= base_url('uploads/banners/' . $banner['image_path']) ?>" class="d-block w-100" alt="Banner <?= $index + 1 ?>">
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselPromo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Flash Sale Section -->
<section class="flash-sale my-5">
  <div class="container">
    <div class="section-card p-4">
      <div class="d-flex align-items-center mb-2">
        <i class="fas fa-bolt text-pink fs-3 me-2"></i>
        <h4 class="mb-0 text-gradient">FLASH SALE</h4>
        <div id="flashTimer" class="d-flex gap-2 ms-4">
          <span class="badge bg-dark px-2 py-1 text-white">00</span>:
          <span class="badge bg-dark px-2 py-1 text-white">00</span>:
          <span class="badge bg-dark px-2 py-1 text-white">00</span>:
          <span class="badge bg-dark px-2 py-1 text-white">00</span>
        </div>
      </div>
      <p class="text-white mb-4">Pesan sekarang! Persediaan terbatas.</p>

      <div class="row g-3">
        <?php foreach ($flashSales as $item): ?>
          <?php $persentase = ($item['harga_awal'] > 0) ? round((($item['harga_awal'] - $item['harga_diskon']) / $item['harga_awal']) * 100) : 0; ?>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card flash-card bg-dark border border-neon shadow-neon h-100">
              <div class="card-body d-flex flex-column">
                <h6 class="text-gradient mb-1"><?= esc($item['nama_produk']) ?></h6>
                <small class="text-white mb-2"><?= esc($item['game']) ?></small>
                <p class="price mb-2">
                  <span class="new-price">Rp <?= number_format($item['harga_diskon'], 0, ',', '.') ?></span>
                  <del class="old-price text-white ms-2">Rp <?= number_format($item['harga_awal'], 0, ',', '.') ?></del>
                </p>
                <div class="progress mb-2" style="height:4px">
                  <div class="progress-bar bg-pink" role="progressbar" style="width:<?= esc($persentase) ?>%;"></div>
                </div>
                <small class="text-white mb-3"><?= esc($item['stok']) ?> purchased</small>
                <div class="mt-auto d-flex gap-2">
                  <button class="btn btn-neon btn-sm flex-fill">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Trending Section -->
<?php if (!empty($trendingItems)): ?>
<section class="container my-5">
  <div class="section-card p-4">
    <h2 class="text-gradient mb-3">
      <i class="fas fa-fire me-2 text-pink"></i>TRENDING
    </h2>
    <p class="text-white mb-4">Berikut adalah beberapa produk yang paling populer saat ini.</p>
    <div class="row g-3">
      <?php foreach ($trendingItems as $item): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="trending-card d-flex align-items-center p-3">
            <img src="<?= base_url('uploads/trending/' . $item['gambar']) ?>" alt="<?= esc($item['nama_produk']) ?>" class="trending-img me-3">
            <div>
              <h5 class="mb-1 text-biru"><?= esc($item['nama_produk']) ?></h5>
              <small class="text-white"><?= esc($item['penerbit']) ?></small>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Produk List Section -->
<section class="container my-5">
  <div class="section-card p-4">
      <div class="d-flex flex-wrap gap-2 mb-4">
        <?php foreach ($kategoriList as $kat): ?>
          <button class="btn btn-outline-neon btn-cat" data-slug="<?= esc($kat) ?>"><?= esc($kat) ?></button>
        <?php endforeach; ?>
      </div>
      <div class="row g-4" id="produk-container">
        <?php foreach ($products as $p): ?> 
          <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="<?= esc($p['kategori']) ?>">
            <a href="<?= base_url('produk/detail/' . $p['slug']) ?>">
              <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
                <img src="<?= base_url('uploads/produk/' . $p['image']) ?>" alt="<?= esc($p['name']) ?>" class="card-img-top">
                <div class="card-body">
                  <h6 class="card-title text-biru mb-1"><?= esc($p['name']) ?></h6>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center mt-4">
        <button class="btn btn-neon px-4 py-2 rounded-pill shadow-neon" id="btn-lainnya">Tampilkan Lainnya</button>
      </div>
  </div>
</section>

<script>
$(function () {
  const maxVisible = 12;
  let currentCategory = null;

  function showItems(category, limit) {
    $('.produk-item').hide();

    const filtered = category
      ? $(`.produk-item[data-kategori="${category}"]`)
      : $('.produk-item');

    filtered.slice(0, limit).fadeIn();
  }

  // Tampilkan default semua kategori di awal
  showItems(null, maxVisible);

  $('.btn-cat').click(function () {
    $('.btn-cat').removeClass('active');
    $(this).addClass('active');
    currentCategory = $(this).data('slug');
    showItems(currentCategory, maxVisible);
  });

  $('#btn-lainnya').click(function () {
    const visibleCount = currentCategory
      ? $(`.produk-item[data-kategori="${currentCategory}"]:visible`).length
      : $('.produk-item:visible').length;

    const newLimit = visibleCount + 6;
    showItems(currentCategory, newLimit);
  });

  // Flash sale countdown
  const endTime = new Date(new Date().getTime() + 2 * 60 * 60 * 1000);
  setInterval(() => {
    let diff = endTime - new Date();
    if (diff < 0) diff = 0;
    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff / 3600000) % 24);
    const m = Math.floor((diff / 60000) % 60);
    const s = Math.floor((diff / 1000) % 60);
    document.querySelectorAll('#flashTimer .badge').forEach((b, i) => {
      const parts = [d, h, m, s];
      b.textContent = parts[i].toString().padStart(2, '0');
    });
  }, 1000);
});
</script>


<?= $this->endSection() ?>
