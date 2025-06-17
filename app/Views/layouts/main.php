<!DOCTYPE html>
<html lang="id">
<head>
    <?= $this->include('layouts/_partials/head') ?>
</head>
<body style="background-color: var(--hitam-bg); color: var(--putih); display: flex; flex-direction: column; min-height: 100vh;">
    
    <!-- Navbar -->
    <?= $this->include('layouts/_partials/navbar') ?>

    <!-- Konten Utama -->
    <main class="container my-4 flex-grow-1">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <?= $this->include('layouts/_partials/footer') ?>

</body>
</html>
