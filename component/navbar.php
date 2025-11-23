<?php
/**
 * Komponen: Navbar Utama (Fixed Position)
 * Lokasi: components/navbar.php
 * Catatan: Menggunakan PHP untuk menentukan halaman yang sedang aktif.
 */

// Mendapatkan nama file halaman saat ini (misalnya: 'peta.php')
$currentPage = basename($_SERVER['PHP_SELF']);

// Fungsi helper untuk menentukan apakah tautan aktif
function isActive($filename, $currentPage) {
    return ($currentPage == $filename) ? 'active-page' : '';
}
?>

<nav class="navbar">
    <div class="navbar-logo">
        <a href="main.php" class="logo-link">
            <img src="assets/img/logo.png" alt="SIKering Logo" class="logo-img"> 
            <span class="logo-text">SIKering</span>
        </a>
    </div>
    
    <ul class="navbar-links">
        
        <li><a href="peta.php" class="<?php echo isActive('peta.php', $currentPage); ?>">Peta</a></li>
        
        <li><a href="artikel.php" class="<?php echo isActive('artikel.php', $currentPage); ?>">Artikel</a></li>
        
        <li class="dropdown">
            <a href="penyebab.php" class="dropbtn <?php echo isActive('penyebab.php', $currentPage); ?>">Penyebab <span class="arrow">▼</span></a>
            </li>
        
        <li><a href="donasi.php" class="<?php echo isActive('donasi.php', $currentPage); ?>">Donasi</a></li>
        
        <li><a href="tentang.php" class="<?php echo isActive('tentang.php', $currentPage); ?>">Tentang</a></li>
        
        <li><a href="kontak_darurat.php" class="<?php echo isActive('kontak_darurat.php', $currentPage); ?>">Kontak Darurat</a></li>
    </ul>
</nav>