<div class="data-diri">

  <div class="text-field">
    <div class="label-input">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" value="<?php if(isset($_POST['nama'])) echo htmlspecialchars($_POST['nama']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['nama'])) {
          if($errors['nama'] == 'required') echo "mohon isi nama lengkap";
          elseif($errors['nama'] == 'invalid') echo "isikan nama lengkap dengan format alfabet";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" value="<?php if(isset($_POST['nik'])) echo htmlspecialchars($_POST['nik']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['nik'])) {
          if($errors['nik'] == 'required') echo "mohon isi NIK";
          elseif($errors['nik'] == 'invalid') echo "isikan NIK dengan format angka";
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
          elseif($errors['notelp'] == 'invalid') echo "isikan nomor telepon dengan format 08XXXXXXXXX";
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
          elseif($errors['email'] == 'invalid') echo "isikan email dengan format yang benar (xx@xx.xx)";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="alamat">Alamat Rumah</label>
      <textarea name="alamat" id="alamat"><?php if(isset($_POST['alamat'])) echo htmlspecialchars($_POST['alamat']) ?></textarea>
    </div>
    <div class="error">
      <?php 
        if(isset($errors['alamat'])) {
          if($errors['alamat'] == 'required') echo "mohon isi alamat rumah";
          elseif($errors['alamat'] == 'invalid') echo "isikan alamat rumah dengan benar";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="status-rumah">Status Rumah Saat Ini</label>
      <select id="status-rumah" name="status_rumah">
        <option value="null">--pilih--</option>
        <option value="sendiri">Milik Sendiri</option>
        <option value="kontrak">Kontrak</option>
        <option value="keluarga">Keluarga</option>
        <option value="lainnya">Lainnya</option>
      </select>
    </div>
    <div class="error">
      <?php 
        if(isset($errors['status_rumah'])) {
          if($errors['status_rumah'] == 'required') echo "mohon pilih status rumah";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="pekerjaan">Pekerjaan</label>
      <input type="text" id="pekerjaan" name="pekerjaan" value="<?php if(isset($_POST['pekerjaan'])) echo htmlspecialchars($_POST['pekerjaan']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['pekerjaan'])) {
          if($errors['pekerjaan'] == 'required') echo "mohon isi pekerjaan";
          elseif($errors['pekerjaan'] == 'invalid') echo "isikan pekerjaan rumah dengan benar";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="usaha">Instansi Pekerjaan/Nama Usaha</label>
      <input type="text" id="usaha" name="usaha" value="<?php if(isset($_POST['usaha'])) echo htmlspecialchars($_POST['usaha']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['usaha'])) {
          if($errors['usaha'] == 'required') echo "mohon isi pekerjaan/nama usaha";
          elseif($errors['usaha'] == 'invalid') echo "isikan pekerjaan/nama usaha dengan benar";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="pendidikan">Pendidikan Terakhir</label>
      <select id="pendidikan" name="pendidikan">
        <option value="null">--pilih--</option>
        <option value="s3">S3</option>
        <option value="s2">S2</option>
        <option value="s1">S1</option>
        <option value="sma">SMA</option>
        <option value="smp">SMP</option>
        <option value="sd">SD</option>
      </select>
    </div>
    <div class="error">
      <?php 
        if(isset($errors['pendidikan'])) {
          if($errors['pendidikan'] == 'required') echo "mohon pilih pendidikan terakhir";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="pernikahan">Status Pernikahan</label>
      <select id="pernikahan" name="pernikahan">
        <option value="null">--pilih--</option>
        <option value="belum">BELUM MENIKAH</option>
        <option value="sudah">SUDAH MENIKAH</option>
      </select>
    </div>
    <div class="error">
      <?php 
        if(isset($errors['pernikahan'])) {
          if($errors['pernikahan'] == 'required') echo "mohon pilih status pernikahan";
        }
      ?>
    </div>
  </div>

  <div class="text-field">
    <div class="label-input">
      <label for="jumlah-anak">Jumlah anak</label>
      <input type="text" id="jumlah-anak" name="jumlah_anak" value="<?php if(isset($_POST['jumlah_anak'])) echo htmlspecialchars($_POST['jumlah_anak']) ?>">
    </div>
    <div class="error">
      <?php 
        if(isset($errors['jumlah_anak'])) {
          if($errors['jumlah_anak'] == 'required') echo "mohon isi jumlah anak";
          elseif($errors['jumlah_anak'] == 'invalid') echo "isikan jumlah anak dengan benar";
        }
      ?>
    </div>
  </div>
  
</div>

<div class="data-keuangan">

  <div class="field-pendapatan">
    <h3>Pendapatan/bulan</h3>
    <div class="text-field">
      <div class="label-input">
        <label for="suami">Suami</label>
        <input type="text" id="suami" name="suami" placeholder="Rp." value="<?php if(isset($_POST['suami'])) echo htmlspecialchars($_POST['suami']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['suami'])) {
            if($errors['suami'] == 'required') echo "mohon isi pendapatan suami";
            elseif($errors['suami'] == 'invalid') echo "isi pendapatan dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="istri">Istri</label>
        <input type="text" id="istri" name="istri" placeholder="Rp." value="<?php if(isset($_POST['istri'])) echo htmlspecialchars($_POST['istri']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['istri'])) {
            if($errors['istri'] == 'required') echo "mohon isi pendapatan istri";
            elseif($errors['istri'] == 'invalid') echo "isi pendapatan dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="lainlain-pendapatan">Lain-lain</label>
        <input type="text" id="lainlain-pendapatan" name="lainlain_pendapatan" placeholder="Rp." value="<?php if(isset($_POST['lainlain_pendapatan'])) echo htmlspecialchars($_POST['lainlain_pendapatan']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['lainlain_pendapatan'])) {
            if($errors['lainlain_pendapatan'] == 'required') echo "mohon isi pendapatan lain-lain";
            elseif($errors['lainlain_pendapatan'] == 'invalid') echo "isi pendapatan dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="total-pendapatan">Total Pendapatan</label>
        <input type="text" id="total-pendapatan" name="total_pendapatan" placeholder="Rp." value="<?php if(isset($_POST['total_pendapatan'])) echo htmlspecialchars($_POST['total_pendapatan']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['total_pendapatan'])) {
            if($errors['total_pendapatan'] == 'required') echo "mohon isi total pendapatan";
            elseif($errors['total_pendapatan'] == 'invalid') echo "isi total pendapatan dengan benar";
          }
        ?>
      </div>
    </div>
  </div>

  <div class="field-pengeluaran">
    <h3>Pengeluaran/bulan</h3>
    <div class="text-field">
      <div class="label-input">
        <label for="konsumsi-keluarga">Konsumsi Keluarga</label>
        <input type="text" id="konsumsi-keluarga" name="konsumsi_keluarga" placeholder="Rp." value="<?php if(isset($_POST['konsumsi_keluarga'])) echo htmlspecialchars($_POST['konsumsi_keluarga']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['konsumsi_keluarga'])) {
            if($errors['konsumsi_keluarga'] == 'required') echo "mohon isi pengeluaran konsumsi keluarga";
            elseif($errors['konsumsi_keluarga'] == 'invalid') echo "isi pengeluaran dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="biaya-pendidikan">Biaya Pendidikan</label>
        <input type="text" id="biaya-pendidikan" name="biaya_pendidikan" placeholder="Rp." value="<?php if(isset($_POST['biaya_pendidikan'])) echo htmlspecialchars($_POST['biaya_pendidikan']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['biaya_pendidikan'])) {
            if($errors['biaya_pendidikan'] == 'required') echo "mohon isi pengeluaran biaya pendidikan";
            elseif($errors['biaya_pendidikan'] == 'invalid') echo "isi pengeluaran dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="biaya-kesehatan">Biaya Kesehatan</label>
        <input type="text" id="biaya-kesehatan" name="biaya_kesehatan" placeholder="Rp." value="<?php if(isset($_POST['biaya_kesehatan'])) echo htmlspecialchars($_POST['biaya_kesehatan']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['biaya_kesehatan'])) {
            if($errors['biaya_kesehatan'] == 'required') echo "mohon isi pengeluaran biaya kesehatan";
            elseif($errors['biaya_kesehatan'] == 'invalid') echo "isi pengeluaran dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="listrik-pulsa">Listrik & Pulsa</label>
        <input type="text" id="listrik-pulsa" name="listrik_pulsa" placeholder="Rp." value="<?php if(isset($_POST['listrik_pulsa'])) echo htmlspecialchars($_POST['listrik_pulsa']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['listrik_pulsa'])) {
            if($errors['listrik_pulsa'] == 'required') echo "mohon isi pengeluaran listrik & pulsa";
            elseif($errors['listrik_pulsa'] == 'invalid') echo "isi pengeluaran dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="angsuran">Angsuran</label>
        <input type="text" id="angsuran" name="angsuran" placeholder="Rp." value="<?php if(isset($_POST['angsuran'])) echo htmlspecialchars($_POST['angsuran']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['angsuran'])) {
            if($errors['angsuran'] == 'required') echo "mohon isi pengeluaran angsuran";
            elseif($errors['angsuran'] == 'invalid') echo "isi pengeluaran dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="lainlain-pengeluaran">Lain-lain</label>
        <input type="text" id="lainlain-pengeluaran" name="lainlain_pengeluaran" placeholder="Rp." value="<?php if(isset($_POST['lainlain_pengeluaran'])) echo htmlspecialchars($_POST['lainlain_pengeluaran']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['lainlain_pengeluaran'])) {
            if($errors['lainlain_pengeluaran'] == 'required') echo "mohon isi pengeluaran lain-lain";
            elseif($errors['lainlain_pengeluaran'] == 'invalid') echo "isi pengeluaran dengan benar, jika tidak memiliki isi 0";
          }
        ?>
      </div>
    </div>
    <div class="text-field">
      <div class="label-input">
        <label for="total-pengeluaran">Total Pengeluaran</label>
        <input type="text" id="total-pengeluaran" name="total_pengeluaran" placeholder="Rp." value="<?php if(isset($_POST['total_pengeluaran'])) echo htmlspecialchars($_POST['total_pengeluaran']) ?>">
      </div>
      <div class="error">
        <?php 
          if(isset($errors['total_pengeluaran'])) {
            if($errors['total_pengeluaran'] == 'required') echo "mohon isi total pengeluaran";
            elseif($errors['total_pengeluaran'] == 'invalid') echo "isi total pengeluaran dengan benar";
          }
        ?>
      </div>
    </div>
  </div>

</div>

<div class="field-permasalahan">
  <h3>Detail Permasalahan</h3>
  <div class="label">
    <label for="permasalahan">Permasalahan yang sedang dihadapi</label>
  </div>
  <textarea name="permasalahan" id="permasalahan"><?php if(isset($_POST['permasalahan'])) echo htmlspecialchars($_POST['permasalahan']) ?></textarea>
  <div class="error">
    <?php 
      if(isset($errors['permasalahan'])) {
        if($errors['permasalahan'] == 'required') echo "mohon isi permasalahan yang sedang dihadapi sehingga membutuhkan dana bantuan";
      }
    ?>
  </div>
</div>

<div class="persetujuan">
  <label for="persetujuan">
    <input type="checkbox" name="persetujuan" id="persetujuan" value="true" <?php if(isset($_POST['persetujuan'])) echo "checked"; ?> >
    Dengan mengisi Formulir ini maka saya menyatakan bahwa data yang saya isikan lengkap dan benar sesuai dengan keadaan yang sebenarnya.
  </label>
  <div class="error">
    <?php 
      if(isset($errors['persetujuan'])) {
        if($errors['persetujuan'] == 'required') echo "mohon setujui sebelum melakukan pengiriman formulir";
      }
    ?>
  </div>
</div>

<div class="submit">
  <button type="submit" name="submit">KIRIM FORMULIR</button>
</div>
