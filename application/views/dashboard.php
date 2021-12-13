<div class="container-fluid">
  <div class="row text-left">

    <?php foreach ($wisata as $wst) : ?>

      <div class="card ml-3" style="width: 30rem;">
        <img src="<?php echo base_url() . '/gambar/' . $wst->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b><?php echo $wst->nama_wst ?></h5></b>
          <p class="card-text"><?php echo $wst->keterangan ?></p>
          <span class="badge rounded-pill bg-info text-light">Rp . <?php echo $wst->harga ?></span><br><br>
          <a href="<?php echo base_url('dashboard/pembayaran') ?>" class="btn btn-lg btn-primary">Booking</a>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
</div>