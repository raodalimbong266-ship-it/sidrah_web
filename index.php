<?php
$page = $_GET['page'] ?? 'beranda';
$allowed = ['beranda', 'profil', 'katalog', 'kontak'];
if (!in_array($page, $allowed, true)) $page = 'beranda';
$pageTitles = ['beranda'=>'Beranda','profil'=>'Profil','katalog'=>'Katalog','kontak'=>'Kontak'];
$pageTitle = $pageTitles[$page];
include __DIR__ . '/includes/header.php';
include __DIR__ . '/views/' . $page . '.php';
include __DIR__ . '/includes/footer.php';
?>
