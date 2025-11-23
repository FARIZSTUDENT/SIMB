<?php
/**
 * Komponen: Formulir Donasi
 * Lokasi: components/donation_form.php
 * Catatan: Form statis untuk ilustrasi tata letak.
 */
?>

<section class="donation-form-section">
    <div class="donation-form-container">
        
        <header class="form-header">
            <h2 class="form-title">Berdonasi Sekarang</h2>
            <p class="form-subtitle">Pilih nominal donasi atau masukkan jumlah sesuai keinginan Anda</p>
        </header>

        <form action="#" method="POST" class="donation-form">
            
            <div class="form-group">
                <label class="form-label">Pilih Nominal Donasi</label>
                <div class="nominal-options">
                    
                    <?php
                    // Pastikan nominal 1JT terpilih sebagai default agar total awal Rp 1.000.000
                    $nominasi = [
                        '50K' => 50000, 
                        '100K' => 100000, 
                        '250K' => 250000, 
                        '500K' => 500000, 
                        '1JT' => 1000000
                    ];
                    foreach ($nominasi as $label => $value) {
                        $isChecked = ($value == 1000000) ? 'checked' : ''; // Default 1JT
                        echo '
                            <input type="radio" id="nominal-' . $label . '" name="nominal" value="' . $value . '" ' . $isChecked . ' class="nominal-radio js-nominal-radio">
                            <label for="nominal-' . $label . '" class="nominal-label">
                                <span class="rp-prefix">Rp</span> ' . $label . '
                            </label>
                        ';
                    }
                    ?>
                </div>

                <div class="input-other-nominal-group">
                    <span class="rp-prefix-input">Rp</span>
                    <input type="text" name="nominal_lain" placeholder="Atau masukkan nominal lainnya" class="input-other-nominal">
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Data Donatur</label>
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="input-full-width">
                
                <div class="input-group-2">
                    <input type="email" name="email" placeholder="Email" class="input-split">
                    <input type="tel" name="nomor_telepon" placeholder="Nomor Telepon" class="input-split">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Metode Pembayaran</label>
                <div class="payment-options">
                    
                    <input type="radio" id="pay-card" name="payment_method" value="card" checked class="payment-radio js-payment-radio">
                    <label for="pay-card" class="payment-label">
                        <span class="checkmark-icon"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><path d="M1 10h22"/></svg>
                        Kartu Kredit/Debit
                    </label>

                    <input type="radio" id="pay-ewallet" name="payment_method" value="ewallet" class="payment-radio js-payment-radio">
                    <label for="pay-ewallet" class="payment-label">
                        <span class="checkmark-icon"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12V3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v9"/><path d="M12 21a2 2 0 0 1-2-2v-4h4v4a2 2 0 0 1-2 2z"/></svg>
                        E-Wallet
                    </label>

                    <input type="radio" id="pay-bank" name="payment_method" value="bank" class="payment-radio js-payment-radio">
                    <label for="pay-bank" class="payment-label">
                        <span class="checkmark-icon"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6" width="18" height="12" rx="2"/><path d="M8 12h8"/><path d="M8 9h8"/></svg>
                        Transfer Bank
                    </label>
                </div>
            </div>

            <div class="payment-cta-box">
                <div class="total-display">
                    <span class="total-label">Total Donasi</span>
                    <span class="total-amount" id="total-amount-display">Rp 1.000.000</span>
                </div>
                <button type="submit" class="cta-button">
                    Lanjutkan ke Pembayaran
                </button>
            </div>
            
        </form>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nominalRadios = document.querySelectorAll('.js-nominal-radio');
        const totalDisplay = document.getElementById('total-amount-display');

        // Fungsi untuk format angka ke Rupiah (Rp 1.000.000)
        function formatRupiah(amount) {
            return 'Rp ' + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function updateDonationTotal() {
            let selectedValue = 0;
            
            nominalRadios.forEach(radio => {
                if (radio.checked) {
                    selectedValue = parseInt(radio.value);
                }
            });

            if (selectedValue > 0) {
                totalDisplay.textContent = formatRupiah(selectedValue);
            }
        }

        nominalRadios.forEach(radio => {
            radio.addEventListener('change', updateDonationTotal);
        });
        
        // Panggil fungsi sekali saat load
        updateDonationTotal(); 
    });
</script>