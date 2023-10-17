<div class="data-diri">

  <div class="text-field">
    <div class="label-input">
      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" value="<?php if(isset($_POST['nik'])) echo htmlspecialchars($_POST['nik']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['nik'])) {
          if($errors['nik'] == 'required') echo "mohon isi NIK";
          elseif($errors['nik'] == 'invalid') echo "isi NIK dengan format angka 16 digit";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="nama-pelaku">Nama Pelaku Usaha</label>
      <input type="text" id="nama-pelaku" name="nama-pelaku" value="<?php if(isset($_POST['nama-pelaku'])) echo htmlspecialchars($_POST['nama-pelaku']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['nama-pelaku'])) {
          if($errors['nama-pelaku'] == 'required') echo "mohon isi nama pelaku usaha";
          elseif($errors['nama-pelaku'] == 'invalid') echo "isi nama pelaku usaha dengan format alfabet";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="jenis-usaha">Jenis Pelaku Usaha</label>
      <select id="jenis-usaha" name="jenis-usaha">
        <option value="null">--pilih--</option>
        <option value="perseorangan" <?php if(isset($_POST['jenis-usaha'])) if($_POST['jenis-usaha'] == "perseorangan") echo "selected" ?>>Perseorangan</option>
        <option value="badan" <?php if(isset($_POST['jenis-usaha'])) if($_POST['jenis-usaha'] == "badan") echo "selected" ?>>Badan Usaha</option>
      </select>
    </div>
    <div class="error">
      <?php 
        if(isset($errors['jenis-usaha'])) {
          if($errors['jenis-usaha'] == 'required') echo "mohon pilih jenis pelaku usaha";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="notelp">Nomor Telepon</label>
      <input type="text" id="notelp" name="notelp" value="<?php if(isset($_POST['notelp'])) echo htmlspecialchars($_POST['notelp']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['notelp'])) {
          if($errors['notelp'] == 'required') echo "mohon isi nomor telepon";
          elseif($errors['notelp'] == 'invalid') echo "isi nomor telepon dengan format 08XXXXXXXXX";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['email'])) {
          if($errors['email'] == 'required') echo "mohon isi alamat email";
          elseif($errors['email'] == 'invalid') echo "isi email dengan format yang benar (xx@xx.xx)";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="nama-brand">Nama Usaha/Brand</label>
      <input type="text" id="nama-brand" name="nama-brand" value="<?php if(isset($_POST['nama-brand'])) echo htmlspecialchars($_POST['nama-brand']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['nama-brand'])) {
          if($errors['nama-brand'] == 'required') echo "mohon isi nama brand anda";
          elseif($errors['nama-brand'] == 'invalid') echo "isi nama brand anda dengan format alfanumerik minimal 2 karakter";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" id="alamat" placeholder="Contoh: Jl. Madura No.1"><?php if(isset($_POST['alamat'])) echo htmlspecialchars($_POST['alamat']) ?></textarea>
      <div>Isi alamat <span>tanpa</span> menyertakan RT/RW dan kode pos</div>
    </div>
    <div class="error">
      <?php 
        if(isset($errors['alamat'])) {
          if($errors['alamat'] == 'required') echo "mohon isi alamat";
          elseif($errors['alamat'] == 'invalid') echo "isi alamat sesuai contoh";
        }
      ?>
    </div>
  </div>

  <div class="daerah">
    <div class="text-field">
      <div class="label-input">
        <label for="provinsi">Provinsi</label>
        <input type="text" name="provinsi" id="provinsi" value="<?php if(isset($_POST['provinsi'])) echo htmlspecialchars($_POST['provinsi']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['provinsi'])) {
            if($errors['provinsi'] == 'required') echo "mohon isi provinsi";
            elseif($errors['provinsi'] == 'invalid') echo "isi provinsi dengan benar";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="kabupaten/kota">Kabupaten/Kota</label>
        <input type="text" name="kabupaten/kota" id="kabupaten/kota" value="<?php if(isset($_POST['kabupaten/kota'])) echo htmlspecialchars($_POST['kabupaten/kota']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['kabupaten/kota'])) {
            if($errors['kabupaten/kota'] == 'required') echo "mohon isi kabupaten/kota";
            elseif($errors['kabupaten/kota'] == 'invalid') echo "isi kabupaten/kota dengan benar";
          }
        ?>
      </div>
    </div>
  </div>
  
  <div class="daerah">
    <div class="text-field">
      <div class="label-input">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="kecamatan" id="kecamatan" value="<?php if(isset($_POST['kecamatan'])) echo htmlspecialchars($_POST['kecamatan']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['kecamatan'])) {
            if($errors['kecamatan'] == 'required') echo "mohon isi kecamatan";
            elseif($errors['kecamatan'] == 'invalid') echo "isi kecamatan dengan benar";
          }
        ?>
      </div>
    </div>
    
    <div class="text-field">
      <div class="label-input">
        <label for="desa/kelurahan">Desa/Kelurahan</label>
        <input type="text" name="desa/kelurahan" id="desa/kelurahan" value="<?php if(isset($_POST['desa/kelurahan'])) echo htmlspecialchars($_POST['desa/kelurahan']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['desa/kelurahan'])) {
            if($errors['desa/kelurahan'] == 'required') echo "mohon isi desa/kelurahan";
            elseif($errors['desa/kelurahan'] == 'invalid') echo "isi desa/kelurahan dengan benar";
          }
        ?>
      </div>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['password'])) {
          if($errors['password'] == 'required') echo "mohon isi password";
          elseif($errors['password'] == 'invalid') echo "isi password dengan format alfanumerik minimal 8 karakter";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="password-confirm">Konfirmasi Password</label>
      <input type="password" id="password-confirm" name="password-confirm" value="<?php if(isset($_POST['password-confirm'])) echo htmlspecialchars($_POST['password-confirm']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['password-confirm'])) {
          if($errors['password-confirm'] == 'required') echo "mohon isi konfirmasi password";
          elseif($errors['password-confirm'] == 'invalid') echo "password tidak sesuai";
        }
      ?>
    </div>
  </div>

</div>

<div class="persetujuan">
  <label for="persetujuan">
    <input type="checkbox" name="persetujuan" id="persetujuan" value="true" <?php if(isset($_POST['persetujuan'])) echo "checked"; ?> >
    Saya setuju dengan Syarat dan Ketentuan serta Kebijakan Privasi yang berlaku di lembaga Kementrian Investasi/BKPM.
  </label>
  <div class="error">
    <?php 
      if(isset($errors['persetujuan'])) {
        if($errors['persetujuan'] == 'required') echo "mohon setujui sebelum mengirim pendaftaran";
      }
    ?>
  </div>
</div>

<div class="submit">
  <button type="submit" name="submit">DAFTAR</button>
</div>
