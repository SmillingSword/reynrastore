<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div id="carouselPromo" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
  <div class="carousel-inner rounded-4 shadow-lg">

    <div class="carousel-item active">
      <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fbanner%2Fstarlightjunigordwebbanner-ezgif.com-optijpeg.jpg&w=1920&q=100" class="d-block w-100" alt="Promo 1">
    </div>

    <div class="carousel-item">
      <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fbanner%2Fstarlightjunigordwebbanner-ezgif.com-optijpeg.jpg&w=1920&q=100" class="d-block w-100" alt="Promo 2">
    </div>

    <div class="carousel-item">
      <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fbanner%2Fstarlightjunigordwebbanner-ezgif.com-optijpeg.jpg&w=1920&q=100" class="d-block w-100" alt="Promo 3">
    </div>

  </div>

  <!-- Tombol panah -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselPromo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Flash Sale Section (Tempatkan di bawah carousel) -->
<section class="flash-sale my-5">
  <div class="container">
    <!-- Header dan Timer -->
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

    <!-- Kartu Produk Flash Sale -->
    <div class="row g-3">
      <!-- Contoh satu kartu: duplikat untuk produk lain -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="card flash-card bg-dark border border-neon shadow-neon h-100">
          <div class="card-body d-flex flex-column">
            <h6 class="text-gradient mb-1">Member Mingguan (Limited)</h6>
            <small class="text-white mb-2">Free Fire</small>
            <p class="price mb-2">
              <span class="new-price">Rp 25.999</span>
              <del class="old-price text-white ms-2">Rp 28.000</del>
            </p>
            <div class="progress mb-2" style="height:4px">
              <div class="progress-bar bg-pink" role="progressbar" style="width:21%;"></div>
            </div>
            <small class="text-white mb-3">42 / 199 purchased</small>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-outline-neon btn-sm flex-fill">- Rp 2.001</button>
              <button class="btn btn-neon btn-sm flex-fill">Instan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="card flash-card bg-dark border border-neon shadow-neon h-100">
          <div class="card-body d-flex flex-column">
            <h6 class="text-gradient mb-1">Member Mingguan (Limited)</h6>
            <small class="text-white mb-2">Free Fire</small>
            <p class="price mb-2">
              <span class="new-price">Rp 25.999</span>
              <del class="old-price text-white ms-2">Rp 28.000</del>
            </p>
            <div class="progress mb-2" style="height:4px">
              <div class="progress-bar bg-pink" role="progressbar" style="width:21%;"></div>
            </div>
            <small class="text-white mb-3">42 / 199 purchased</small>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-outline-neon btn-sm flex-fill">- Rp 2.001</button>
              <button class="btn btn-neon btn-sm flex-fill">Instan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="card flash-card bg-dark border border-neon shadow-neon h-100">
          <div class="card-body d-flex flex-column">
            <h6 class="text-gradient mb-1">Member Mingguan (Limited)</h6>
            <small class="text-white mb-2">Free Fire</small>
            <p class="price mb-2">
              <span class="new-price">Rp 25.999</span>
              <del class="old-price text-white ms-2">Rp 28.000</del>
            </p>
            <div class="progress mb-2" style="height:4px">
              <div class="progress-bar bg-pink" role="progressbar" style="width:21%;"></div>
            </div>
            <small class="text-white mb-3">42 / 199 purchased</small>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-outline-neon btn-sm flex-fill">- Rp 2.001</button>
              <button class="btn btn-neon btn-sm flex-fill">Instan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="card flash-card bg-dark border border-neon shadow-neon h-100">
          <div class="card-body d-flex flex-column">
            <h6 class="text-gradient mb-1">Member Mingguan (Limited)</h6>
            <small class="text-white mb-2">Free Fire</small>
            <p class="price mb-2">
              <span class="new-price">Rp 25.999</span>
              <del class="old-price text-white ms-2">Rp 28.000</del>
            </p>
            <div class="progress mb-2" style="height:4px">
              <div class="progress-bar bg-pink" role="progressbar" style="width:21%;"></div>
            </div>
            <small class="text-white mb-3">42 / 199 purchased</small>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-outline-neon btn-sm flex-fill">- Rp 2.001</button>
              <button class="btn btn-neon btn-sm flex-fill">Instan</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir contoh kartu -->
    </div>
  </div>
</section>

<section class="container my-5">
  <h2 class="text-gradient mb-3">
    <i class="fas fa-fire me-2 text-pink"></i>TRENDING
  </h2>
  <p class="text-white mb-4">Berikut adalah beberapa produk yang paling populer saat ini.</p>
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="trending-card d-flex align-items-center p-3">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="trending-img me-3">
        <div>
          <h5 class="mb-1 text-biru">Mobile Legends</h5>
          <small class="text-white">Moonton</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="trending-card d-flex align-items-center p-3">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="trending-img me-3">
        <div>
          <h5 class="mb-1 text-biru">Mobile Legends</h5>
          <small class="text-white">Moonton</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="trending-card d-flex align-items-center p-3">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="trending-img me-3">
        <div>
          <h5 class="mb-1 text-biru">Mobile Legends</h5>
          <small class="card-text text-white">Moonton</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="trending-card d-flex align-items-center p-3">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="trending-img me-3">
        <div>
          <h5 class="mb-1 text-biru">Mobile Legends</h5>
          <small class="text-white">Moonton</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- List Produk Section -->
<section class="container my-5">
  <div class="d-flex flex-wrap gap-2 mb-4">
      <button class="btn btn-outline-neon btn-cat active" data-slug="Games">Games</button>
      <button class="btn btn-outline-neon btn-cat" data-slug="Apps">Apps Premium</button>
      <button class="btn btn-outline-neon btn-cat" data-slug="Pulsa">Pulsa</button>
  </div>
  <div class="row g-4" id="produk-container">
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="Games">
      <div class="card product-card bg-dark border border-neon shadow-neon position-relative">
        <img src="https://www.bangjeff.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2F87379964-51d0-4baa-a8d6-69ec2aebee85.webp&w=1920&q=75" alt="Mobile Legends" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title text-biru mb-1">Mobile Legends</h6>
          <p class="card-text text-white mb-0">Moonton</p>
        </div>
        <a href="" class="position-absolute top-2 end-2 text-white fs-5 link-icon"><i class="bi bi-link-45deg"></i></a>
      </div>
    </div>
  </div>

  <!-- Tampilkan Lainnya -->
  <div class="text-center mt-4">
    <button class="btn btn-neon px-4 py-2 rounded-pill shadow-neon" id="btn-lainnya">Tampilkan Lainnya</button>
  </div>
</section>





<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      1024: { slidesPerView: 4 },
      768: { slidesPerView: 3 },
      576: { slidesPerView: 2 },
      0: { slidesPerView: 1 },
    }
  });
</script>

<script>
    $(document).ready(function() {
    const maxVisible = 12;

    function showItems(limit) {
        $('.produk-item').hide();
        $('.produk-item:lt(' + limit + ')').show();
    }

    showItems(maxVisible);

    $('#btn-lainnya').click(function() {
        let currentlyShown = $('.produk-item:visible').length;
        showItems(currentlyShown + 5);
    });

    $('.filter-btn').click(function() {
        const kategori = $(this).data('kategori');
        $('.produk-item').hide();

        if (kategori === 'all') {
        showItems(maxVisible);
        } else {
        $('.produk-item').filter('[data-kategori="' + kategori + '"]').slice(0, maxVisible).show();
        }
    });
    });

    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.produk-item').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
</script>

<!-- Script Countdown -->
<script>
  // Countdown flash sale
  const endTime = new Date(new Date().getTime() + 2*60*60*1000);
  function updateTimer() {
    let diff = endTime - new Date(); if(diff<0) diff=0;
    const d = Math.floor(diff/(1000*60*60*24));
    const h = Math.floor((diff/3600000)%24);
    const m = Math.floor((diff/60000)%60);
    const s = Math.floor((diff/1000)%60);
    document.querySelectorAll('#flashTimer .badge').forEach((b,i) => {
      const parts = [d,h,m,s];
      b.textContent = parts[i].toString().padStart(2,'0');
    });
  }
  setInterval(updateTimer, 1000);

  // List Produk: load more & filter
  $(function() {
    const maxVisible = 12;
    function showItems(limit) {
      $('.produk-item').hide().slice(0, limit).fadeIn();
    }
    showItems(maxVisible);

    $('#btn-lainnya').click(() => {
      const shown = $('.produk-item:visible').length;
      showItems(shown + 6);
    });

    $('.btn-cat').click(function() {
      const slug = $(this).data('slug');
      $('.produk-item').hide();
      if (slug === 'all') showItems(maxVisible);
      else showItems($('.produk-item').filter(`[data-kategori="${slug}"]`).length);
      $('.btn-cat').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>


<?= $this->endSection() ?>


