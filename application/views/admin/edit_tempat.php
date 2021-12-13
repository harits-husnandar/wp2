<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit data wisata</h3>

    <?php foreach ($wisata as $wst) : ?>

        <form method="post" action="<?php echo base_url() .
                                        'admin/Data_tempat/update' ?>">


            <div class="for-group">
                <label>Nama wisata</label>
                <input type="text" name="nama_wst" class="form-control" value="<?php echo $wst->nama_wst ?>">
            </div>

            <div class="for-group">
                <label>keterangan</label>
                <input type="hidden" name="id_wst" class="form-control" value="<?php echo $wst->id_wst ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $wst->keterangan ?>">
            </div>

            <div class="for-group">
                <label>kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $wst->kategori ?>">
            </div>

            <div class="for-group">
                <label>harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $wst->harga ?>">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
        </form>

    <?php endforeach; ?>
</div>