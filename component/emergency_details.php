<?php
/**
 * Komponen: Detail Kontak Darurat dan Formulir Pelaporan
 * Lokasi: components/emergency_details.php
 * Catatan: Melengkapi halaman kontak-darurat.php
 */
?>

<section class="emergency-details-section">
    <div class="emergency-details-container">
        
        <h2 class="section-heading-hidden">Nomor Darurat</h2>
        <div class="emergency-numbers-grid">
            
            <div class="number-card number-bnpb">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14v-4m0-4h.01"/></svg>
                </div>
                <h3 class="card-title">BNPB (Badan Nasional Penanggulangan Bencana)</h3>
                <span class="emergency-number-large">117</span>
                <p class="card-description">Hotline 24/7 untuk pelaporan bencana darurat termasuk kekeringan</p>
            </div>

            <div class="number-card number-sikering">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.254 3.033 7.85 7 8.944V22h6v-1.056c3.967-1.094 7-4.69 7-8.944C22 6.477 17.523 2 12 2zm0 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                </div>
                <h3 class="card-title">Hotline Air Bersih Darurat</h3>
                <span class="emergency-number-large">0800-1-SIKERING</span>
                <p class="card-description">Layanan bantuan air bersih untuk daerah terdampak kekeringan</p>
            </div>

            <div class="number-card number-pupr">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                </div>
                <h3 class="card-title">Call Center Kementerian PUPR</h3>
                <span class="emergency-number-large">021-1500-007</span>
                <p class="card-description">Informasi infrastruktur air dan irigasi</p>
            </div>

        </div> <div class="report-form-wrapper">
            <h2 class="report-form-title">Laporkan Kondisi Kekeringan</h2>
            <p class="report-form-subtitle">Bantu kami mengidentifikasi daerah yang membutuhkan bantuan segera</p>
            
            <form action="#" method="POST" class="report-form">
                
                <div class="input-group-2">
                    <input type="text" name="nama_lengkap" placeholder="Masukkan nama Anda" class="input-split">
                    <input type="tel" name="nomor_telepon" placeholder="Contoh: 08123456789" class="input-split">
                    <span class="input-label-top">Nama Lengkap</span>
                    <span class="input-label-top">Nomor Telepon</span>
                </div>
                
                <input type="text" name="lokasi_kejadian" placeholder="Desa/Kelurahan, Kecamatan, Kabupaten/Kota, Provinsi" class="input-full-width">
                <span class="input-label-top">Lokasi Kejadian</span>
                
                <textarea name="deskripsi_kondisi" placeholder="Jelaskan kondisi kekeringan dan jumlah warga terdampak..." class="input-full-width textarea-tall"></textarea>
                <span class="input-label-top">Deskripsi Kondisi</span>

                <button type="submit" class="submit-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                    Kirim Laporan
                </button>
            </form>
        </div>

        <h2 class="bpbd-title">Kontak BPBD Regional</h2>
        
        <div class="bpbd-grid">
            
            <div class="bpbd-card">
                <h4 class="bpbd-region-title">Jakarta & Sekitarnya</h4>
                <p class="bpbd-agency">BPBD DKI Jakarta</p>
                <ul class="bpbd-contact-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2 2A18.43 18.43 0 0 1 2 4.08a2 2 0 0 1 2-2h3"/><path d="M12 18V6"/></svg> 021-5734-964</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6L12 13 2 6"/></svg> bpbd@jakarta.go.id</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7c-5.3-5.3-8-9.8-8-14.7C4 4.5 7.5 1 12 1s8 3.5 8 6c0 4.9-2.7 9.4-8 14.7z"/></svg> Jl. Taman Jati Baru No. 1, Jakarta Pusat</li>
                </ul>
            </div>
            
            <div class="bpbd-card">
                <h4 class="bpbd-region-title">Jawa Tengah</h4>
                <p class="bpbd-agency">BPBD Jawa Tengah</p>
                <ul class="bpbd-contact-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2 2A18.43 18.43 0 0 1 2 4.08a2 2 0 0 1 2-2h3"/><path d="M12 18V6"/></svg> 024-8414-998</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6L12 13 2 6"/></svg> bpbd@jatengprov.go.id</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7c-5.3-5.3-8-9.8-8-14.7C4 4.5 7.5 1 12 1s8 3.5 8 6c0 4.9-2.7 9.4-8 14.7z"/></svg> Jl. Imam Bonjol No. 1, Semarang</li>
                </ul>
            </div>

            <div class="bpbd-card">
                <h4 class="bpbd-region-title">Jawa Timur</h4>
                <p class="bpbd-agency">BPBD Jawa Timur</p>
                <ul class="bpbd-contact-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2 2A18.43 18.43 0 0 1 2 4.08a2 2 0 0 1 2-2h3"/><path d="M12 18V6"/></svg> 031-8294-111</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6L12 13 2 6"/></svg> bpbd@jatimprog.go.id</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7c-5.3-5.3-8-9.8-8-14.7C4 4.5 7.5 1 12 1s8 3.5 8 6c0 4.9-2.7 9.4-8 14.7z"/></svg> Jl. A. Yani No. 152, Surabaya</li>
                </ul>
            </div>

            <div class="bpbd-card">
                <h4 class="bpbd-region-title">Nusa Tenggara Timur</h4>
                <p class="bpbd-agency">BPBD Nusa Tenggara Timur</p>
                <ul class="bpbd-contact-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2 2A18.43 18.43 0 0 1 2 4.08a2 2 0 0 1 2-2h3"/><path d="M12 18V6"/></svg> 0380-821-829</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6L12 13 2 6"/></svg> bpbd@nttprov.go.id</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7c-5.3-5.3-8-9.8-8-14.7C4 4.5 7.5 1 12 1s8 3.5 8 6c0 4.9-2.7 9.4-8 14.7z"/></svg> Jl. Palapa No. 1, Kupang</li>
                </ul>
            </div>

        </div> </div>
</section>