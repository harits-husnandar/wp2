<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_tempat"><i class="fas fa-plus fa-sm"></i>Tambah Tempat</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Tempat</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($wisata as $wst) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $wst->nama_wst ?></td>
                <td><?php echo $wst->keterangan ?></td>
                <td><?php echo $wst->kategori ?></td>
                <td><?php echo $wst->harga ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i>cari</div>
                </td>
                <td>
                    <?php echo anchor('admin/Data_tempat/edit/' . $wst->id_wst, ' <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>edit</div>') ?>

                </td>
                <td>
                    <?php echo anchor('admin/Data_tempat/hapus/' . $wst->id_wst, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>hapus</div>') ?>

                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_tempat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tempat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/Data_tempat/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Tempat</label>
                        <input type="text" name="nama_wst" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>gambar</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>
        </div>
    </div>
</div>