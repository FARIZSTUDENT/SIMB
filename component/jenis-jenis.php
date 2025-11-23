<?php
/**
 * Komponen: Jenis-Jenis Kekeringan
 * Lokasi: components/drought_types.php
 * Catatan: Menggunakan SVG untuk Icon dan struktur grid 4 kolom.
 */
?>

<section class="drought-types-section">
    <div class="drought-types-container">
        
        <header class="types-header">
            <h2 class="types-title">Jenis-Jenis Kekeringan</h2>
            <p class="types-subtitle">Kekeringan dapat dikategorikan menjadi beberapa jenis berdasarkan penyebab dan dampak yang ditimbulkannya</p>
        </header>

        <div class="types-grid">
            
            <div class="type-box type-meteorologis">
                <div class="type-header-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8l-2 2 4 4 2-2"/></svg>
                    <h3 class="type-name">Kekeringan Meteorologis</h3>
                </div>
                <p class="type-description">Kondisi curah hujan yang berada di bawah normal dalam periode waktu tertentu.</p>
                <h4 class="type-features-title">Ciri-ciri:</h4>
                <ul class="type-features-list">
                    <li><span class="check-icon">✓</span> Terjadi karena kurangnya hujan</li>
                    <li><span class="check-icon">✓</span> Periode kering yang berkepanjangan</li>
                    <li><span class="check-icon">✓</span> Suhu udara lebih tinggi dari normal</li>
                    <li><span class="check-icon">✓</span> Kelembaban udara rendah</li>
                </ul>
            </div>

            <div class="type-box type-hidrologis">
                <div class="type-header-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10.5C7 7.5 12 3 12 3s5 4.5 5 7.5C17 13.5 12 18 12 18s-5-4.5-5-7.5zM12 14v4"/></svg>
                    <h3 class="type-name">Kekeringan Hidrologis</h3>
                </div>
                <p class="type-description">Berkurangnya ketersediaan air permukaan dan air tanah di bawah rata-rata normal.</p>
                <h4 class="type-features-title">Ciri-ciri:</h4>
                <ul class="type-features-list">
                    <li><span class="check-icon">✓</span> Menurunnya debit sungai</li>
                    <li><span class="check-icon">✓</span> Berkurangnya volume waduk dan danau</li>
                    <li><span class="check-icon">✓</span> Menyusutnya air tanah</li>
                    <li><span class="check-icon">✓</span> Sumur-sumur mengering</li>
                </ul>
            </div>

            <div class="type-box type-pertanian">
                <div class="type-header-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20M9 22H3v-6h6v6zM21 8h-6v-6h6v6z"/></svg>
                    <h3 class="type-name">Kekeringan Pertanian</h3>
                </div>
                <p class="type-description">Kekurangan kelembaban tanah yang menyebabkan tanaman mengalami stress.</p>
                <h4 class="type-features-title">Ciri-ciri:</h4>
                <ul class="type-features-list">
                    <li><span class="check-icon">✓</span> Tanah kehilangan kelembaban</li>
                    <li><span class="check-icon">✓</span> Tanaman layu dan gagal panen</li>
                    <li><span class="check-icon">✓</span> Produktivitas menurun drastis</li>
                    <li><span class="check-icon">✓</span> Ternak kekurangan pakan</li>
                </ul>
            </div>

            <div class="type-box type-sosial-ekonomi">
                <div class="type-header-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                    <h3 class="type-name">Kekeringan Sosial-Ekonomi</h3>
                </div>
                <p class="type-description">Dampak kekeringan terhadap aktivitas sosial dan ekonomi masyarakat.</p>
                <h4 class="type-features-title">Ciri-ciri:</h4>
                <ul class="type-features-list">
                    <li><span class="check-icon">✓</span> Kelangkaan air bersih</li>
                    <li><span class="check-icon">✓</span> Harga kebutuhan pokok naik</li>
                    <li><span class="check-icon">✓</span> Pendapatan petani menurun</li>
                    <li><span class="check-icon">✓</span> Meningkatnya kemiskinan</li>
                </ul>
            </div>
        </div>
        
        <div class="types-footer-banner">
            <span class="footer-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4"/></svg>
            </span>
            <span>
                Tahukah Anda? Keempat jenis kekeringan ini saling berkaitan dan dapat terjadi secara bersamaan, memperparah dampak yang ditimbulkan.
            </span>
        </div>
        
    </div>
</section>