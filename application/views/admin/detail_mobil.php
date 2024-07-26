<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Alat Pesta</h1>
    </div>
  </section>

  <?php foreach($detail as $dt): ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-5">
            <img width="110%;" src="<?= base_url('assets/upload/'). $dt->gambar; ?>" alt="">
          </div>
          <div class="col-md-7">
            <table class="table">
              <tr>
                <td>Tipe Alat</td>
                <td>
                  <?php 
                    if($dt->kode_tipe == "WED"){
                      echo "Pernikahan";
                    }
                    elseif($dt->kode_tipe == "BIR"){
                      echo "Ulang Tahun";
                    }
                    elseif($dt->kode_tipe == "CEL"){
                      echo "Perayaan";
                    }
                    else{ ?>
                      <span class="text-danger">Tipe alat belum terdaftar</span>
                    <?php }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Nama Alat</td>
                <td><?= $dt->merek; ?></td>
              </tr>
              <tr>
                <td>Kategori</td>
                <td><?= $dt->no_plat; ?></td>
              </tr>
              <tr>
                <td>Warna</td>
                <td><?= $dt->warna; ?></td>
              </tr>
              <tr>
                <td>Jumlah</td>
                <td><?= $dt->tahun; ?></td>
              </tr>
              <tr>
                <td>Harga Sewa</td>
                <td>Rp. <?= number_format($dt->harga, 0, ',', '.'); ?>,-</td>
              </tr>
              <tr>
                <td>Denda</td>
                <td>Rp. <?= number_format($dt->denda, 0, ',', '.'); ?>,-</td>
              </tr>
              <tr>
                <td>Status</td>
                <td>
                  <?php
                  if($dt->status == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Penjemputan</td>
                <td>
                  <?php
                  if($dt->ac == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Sopir</td>
                <td>
                  <?php
                  if($dt->sopir == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Pengantaran</td>
                <td>
                  <?php
                  if($dt->mp3_player == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Pemasangan</td>
                <td>
                  <?php
                  if($dt->central_lock == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
            </table>

            <a href="<?= base_url('admin/data_mobil'); ?>" class="btn btn-sm btn-danger ml-4">Kembali</a>
            <a href="<?= base_url('admin/data_mobil/update_mobil/').$dt->id_mobil; ?>" class="btn btn-sm btn-primary">Update</a>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach; ?>
</div>