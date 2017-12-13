<form role="form">
  <div class="row">
    <div class="col-md-4">
      <legend>Biodata</legend>
      <div class="form-group">
        <label for="inputEmail1">Email</label>
        <input type="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="inputPassword1">No Induk Siswa</label>
        <input type="text" class="form-control" placeholder="No Induk Siswa">
      </div>
      <div class="form-group">
        <label for="inputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="inputPassword1">Tempat Lahir</label>
        <input type="text" class="form-control" placeholder="Tempat Lahir">
      </div>
      <div class="form-group">
        <label for="inputPassword1">Tanggal Lahir</label>
        <div class="input-group">
          <select class="form-control" style="width:auto;">
            <?php
              for($i=1;$i<=31;$i++)
                echo "<option>$i</option>";
            ?>
          </select>
          <select class="form-control" style="width:auto;">
            <?php
              for($m = 1;$m <= 12; $m++){ 
                $month =  date("F", mktime(0, 0, 0, $m)); 
                echo "<option value='$m'>$month</option>"; 
              }
            ?>
          </select>
          <select class="form-control" style="width:auto;">
            <?php
              for($year=2008;$year>=1993;$year--)
                echo "<option>$year</option>";
            ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword1">No Telp</label>
        <input type="text" class="form-control" placeholder="No Telp">
      </div>
    </div>
    <div class="col-md-4">
      <legend>Sekolah</legend>
      <div class="form-group">
        <label for="inputEmail1">Asal Sekolah</label>
        <input type="text" class="form-control" placeholder="Asal Sekolah">
      </div>
      <div class="form-group">
        <label for="inputEmail1">Alamat Sekolah</label>
        <input type="text" class="form-control" placeholder="Alamat Sekolah">
      </div>
      <div class="form-group">
        <label for="inputEmail1">No Telp Sekolah</label>
        <input type="text" class="form-control" placeholder="No Telp Sekolah">
      </div>
      <div class="form-group">
        <label for="inputEmail1">Jenjang Sekolah</label>
        <select class="form-control">
          <option>SMP</option>
          <option>SMA/SMK</option>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <legend>Pembimbing</legend>
      <div class="form-group">
        <label for="inputEmail1">NIP Pembimbing</label>
        <input type="text" class="form-control" placeholder="NIP Pembimbing">
      </div>
      <div class="form-group">
        <label for="inputEmail1">Nama Pembimbing</label>
        <input type="text" class="form-control" placeholder="Nama Pembimbing">
      </div>
      <div class="form-group">
        <label for="inputEmail1">No Telp Pembimbing</label>
        <input type="text" class="form-control" placeholder="No Telp Pembimbing">
      </div>
    </div>
    <div class="col-md-8">
      <div class="form-group">
        <div class="col-lg-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Saya yakin dan menerima seluruh ketentuan yang berlaku
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10">
          <button type="submit" class="btn btn-default btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div> <!-- /row -->
</form>