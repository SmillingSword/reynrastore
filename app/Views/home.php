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

<section class="container my-5">
  <h3 class="text-center fw-bold text-gradient mb-4">🔥 Produk Populer</h3>
  <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Produk 1 -->
            <div class="swiper-slide">
                <div class="card produk-card bg-dark border border-neon text-white shadow text-center">
                    <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75" class="card-img-top p-3" alt="MLBB">
                    <div class="card-body produk-body">
                        <div>
                            <h5 class="card-title">Mobile Legends</h5>
                            <p class="card-text text-muted">Mulai Rp5.000</p>
                        </div>
                        <a href="#" class="btn btn-neon w-100">Top Up</a>
                    </div>
                </div>
            </div>

            <!-- Produk 1 -->
            <div class="swiper-slide">
                <div class="card produk-card bg-dark border border-neon text-white shadow text-center">
                    <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75" class="card-img-top p-3" alt="MLBB">
                    <div class="card-body produk-body">
                        <div>
                            <h5 class="card-title">Mobile Legends</h5>
                            <p class="card-text text-muted">Mulai Rp5.000</p>
                        </div>
                        <a href="#" class="btn btn-neon w-100">Top Up</a>
                    </div>
                </div>
            </div>

            <!-- Produk 1 -->
            <div class="swiper-slide">
                <div class="card produk-card bg-dark border border-neon text-white shadow text-center">
                    <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75" class="card-img-top p-3" alt="MLBB">
                    <div class="card-body produk-body">
                        <div>
                            <h5 class="card-title">Mobile Legends</h5>
                            <p class="card-text text-muted">Mulai Rp5.000</p>
                        </div>
                        <a href="#" class="btn btn-neon w-100">Top Up</a>
                    </div>
                </div>
            </div>

            <!-- Produk 1 -->
            <div class="swiper-slide">
                <div class="card produk-card bg-dark border border-neon text-white shadow text-center">
                    <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75" class="card-img-top p-3" alt="MLBB">
                    <div class="card-body produk-body">
                        <div>
                            <h5 class="card-title">Mobile Legends</h5>
                            <p class="card-text text-muted">Mulai Rp5.000</p>
                        </div>
                        <a href="#" class="btn btn-neon w-100">Top Up</a>
                    </div>
                </div>
            </div>

            <!-- Produk 1 -->
            <div class="swiper-slide">
                <div class="card produk-card bg-dark border border-neon text-white shadow text-center">
                    <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75" class="card-img-top p-3" alt="MLBB">
                    <div class="card-body produk-body">
                        <div>
                            <h5 class="card-title">Mobile Legends</h5>
                            <p class="card-text text-muted">Mulai Rp5.000</p>
                        </div>
                        <a href="#" class="btn btn-neon w-100">Top Up</a>
                    </div>
                </div>
            </div>

            <!-- Tambah produk lain dengan .swiper-slide -->

        </div>
    </div>
</section>

<section class="container my-5">
  <h3 class="text-center fw-bold text-gradient mb-4">🔥 List Produk</h3>

  <!-- Filter Kategori -->
  <div class="d-flex justify-content-center flex-wrap gap-2 mb-3">
    <button class="btn btn-outline-neon filter-btn" data-kategori="all">Semua</button>
    <button class="btn btn-outline-neon filter-btn" data-kategori="game">Game</button>
    <button class="btn btn-outline-neon filter-btn" data-kategori="pulsa">Pulsa</button>
    <button class="btn btn-outline-neon filter-btn" data-kategori="apk">APK Premium</button>
  </div>

  <!-- Search -->
  <div class="row mb-4 justify-content-center">
    <div class="col-md-6">
      <input type="text" id="searchInput" class="form-control neon-input" placeholder="Cari produk...">
    </div>
  </div>

  <!-- Produk Grid -->
  <div class="row g-3 justify-content-center" id="produk-container">
    <!-- Contoh Produk -->
    <div class="col-6 col-md-4 col-lg-2 produk-item" data-kategori="game">
      <div class="card bg-dark text-white border border-neon shadow text-center position-relative">
        <img src="https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75" class="card-img-top" alt="Mobile Legends">
        <div class="overlay d-flex justify-content-center align-items-center">
          <h6 class="text-white m-0">Mobile Legends</h6>
        </div>
      </div>
    </div>
    <!-- Tambahkan produk lainnya -->
  </div>

  <!-- Tampilkan Lainnya -->
  <div class="text-center mt-4">
    <button class="btn btn-neon" id="btn-lainnya">Tampilkan Lainnya</button>
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


<?= $this->endSection() ?>


