<div class="container-fluid">
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="btn btn-sm btn-success">
            <?php 
            $grand_total =0;
            if ($keranjang = $this->cart->contents())
            {
                foreach ($keranjang as $items)
                {
                    $grand_total = $grand_total + $items['subtotal'];
                }
            echo "<h6>Total Belanja Anda: Rp. " .number_format($grand_total,0,',','.');
             ?>
        </div><br><br>

        <h4>Input Alamat Pengiriman dan Pembayaran</h4>

        <form method="post" action="<?php echo base_url() ?>index.php/dashboard/proses_pesanan">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" required>
                <div class="invalid-feedback">
                Silahkan Masukkan Nama Lengkap.
              </div> 
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" required>
                <div class="invalid-feedback">
                Please enter your shipping address.
              </div> 
            </div>

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telepon" placeholder="No Telepon Anda" class="form-control" required>
                <div class="invalid-feedback">
                Please enter your shipping address.
              </div> 
            </div>

            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control" required>
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>Gosend</option>
                    <option>SPX</option>
                </select>
                <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="form-group">
                <label>Pilih Bank</label>
                <select class="form-control" required>
                    <option>BCA - 5612707 </option>
                    <option>BNI - 6480939 </option>
                    <option>BRI - 3832482 </option>
                    <option>MANDIRI - 2417603 </option>
                </select>
                <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Pesan</button>

        </form>

        <?php
        } 
        else
        {
            echo "<h4>Keranjang Belanja Anda Masih Kosong";
        } 
        ?>

    </div><br><br>

    <script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

    <div class="col-md-2"></div>
   </div>
</div