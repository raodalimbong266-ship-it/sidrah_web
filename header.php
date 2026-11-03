<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?> | Sidrah Tart &amp; Bakery</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="index.php?page=beranda"><img src="assets/images/logo.png" alt="Logo Sidrah Tart & Bakery" onerror="this.style.display='none'"><span><b>Sidrah</b><small>Tart &amp; Bakery</small></span></a>
  <button class="menu-toggle" aria-label="Buka menu" onclick="document.querySelector('.main-nav').classList.toggle('open')">☰</button>
  <nav class="main-nav">
    <a class="<?= $page==='beranda'?'active':'' ?>" href="index.php?page=beranda">Beranda</a>
    <a class="<?= $page==='profil'?'active':'' ?>" href="index.php?page=profil">Profil</a>
    <a class="<?= $page==='katalog'?'active':'' ?>" href="index.php?page=katalog">Katalog</a>
    <a class="<?= $page==='kontak'?'active':'' ?>" href="index.php?page=kontak">Kontak</a>
  </nav>
  <a class="btn btn-primary header-cta" href="https://wa.me/62821234567890" target="_blank" rel="noopener">◉ &nbsp; Pesan Sekarang</a>
</header>
<main>
