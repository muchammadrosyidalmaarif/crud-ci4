<?php echo view('layout/header'); ?>

<?= $this->renderSection('title')?>
    <form action="<?= site_url('/kota/addkota/create') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="mb-3 p-2">
                    <label class="form-label">Nama Kota</label>
                    <input type="text" class="form-control" name="nama_kota">
                </div>
                <div class="mb-3 p-2">
                    <label class="form-label">Nama Provinsi</label>
                    <!--Select/combo box-->
                    <select name="id_provinsi" class="form-control" required>

                        <option value="" hidden></option>
                        <?php foreach ($tampildata as $prov) : ?>
                      <option value="<?=$prov->id_provinsi?>"><?=$prov->nama_provinsi?></option>
                      <?php endforeach ?>

                    </select>
                </div>
                <div class="mb-3 p-2">
                    <label class="form-label">Jumlah Penduduk</label>
                    <input type="text" class="form-control" name="jml_penduduk">
                </div>
                    <button type="submit" class="btn btn-primary ml-2">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    
    </form>
<?= view('layout/footer') ?>