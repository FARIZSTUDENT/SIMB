<?php 
/**
 * Halaman Peta Kekeringan
 * Lokasi: peta.php
 * Catatan: Menggunakan layout statis untuk menampilkan peta.
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Kekeringan - SIkering (KALOLA)</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php include 'component/navbar.php'; ?> 

    <main class="map-page-main-static">
        
        <div class="map-content-wrapper">
            
            <div class="map-static-visual">
                <img src="assets/img/peta.png" alt="Peta Kekeringan Indonesia dari BMKG" class="map-image">
            </div>

            <div class="map-info-section">

                <div class="legend-kekeringan">
                    <ul>
                        <li class="legend-item"><span class="color-box hth-ekstrem"></span> Ekstrem Panjang (> 60 hari)</li>
                        <li class="legend-item"><span class="color-box hth-sangat-panjang"></span> Sangat Panjang (31 - 60 hari)</li>
                        <li class="legend-item"><span class="color-box hth-panjang"></span> Panjang (21 - 30 hari)</li>
                        <li class="legend-item"><span class="color-box hth-menengah"></span> Menengah (11 - 20 hari)</li>
                        <li class="legend-item"><span class="color-box hth-pendek"></span> Pendek (6 - 10 hari)</li>
                        <li class="legend-item"><span class="color-box hth-sangat-pendek"></span> Sangat Pendek (1 - 5 hari)</li>
                        <li class="legend-item"><span class="color-box hth-aman"></span> Aman / Masih ada hujan</li>
                    </ul>
                </div>
                
                <div class="map-footer-info">
                    <p class="scale-placeholder">0 &mdash; 200 &mdash; 400 &mdash; 600 &mdash; 800 &mdash; 1.000 &mdash; 1.800 km</p>
                    <img src="assets/img/bmkg-logo.png" alt="Logo BMKG" class="bmkg-logo">
                </div>
            </div>

        </div>
    </main>
</body>
</html>