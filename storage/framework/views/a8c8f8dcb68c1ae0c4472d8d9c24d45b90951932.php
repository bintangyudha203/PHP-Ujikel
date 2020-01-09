<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-content">
      <div class="fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Inputs</h3>
        </div>
        <div class="panel-body">
          <form action="/inventaris/{$inventaris->id_inventaris}/update" method="POST">
                    <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                <label for="exampleInputEmail1">Id Inventaris</label>
                <input  name="id_inventaris" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Inventaris" value="<?php echo e($inventaris->id_inventaris); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?php echo e($inventaris->nama); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Kondisi</label>
                <input name="kondisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kondisi" value="<?php echo e($inventaris->kondisi); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="<?php echo e($inventaris->keterangan); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Jumlah</label>
                <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="<?php echo e($inventaris->jumlah); ?>">
                </div>
              

                <div class="form-group">
                <label for="exampleInputEmail1">Id Jenis</label>
                <input name="id_jenis" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Jenis" value="<?php echo e($inventaris->id_jenis); ?>">
                </div> 

                <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Register</label>
                <input name="tanggal_register" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Register" value="<?php echo e($inventaris->tanggal_register); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Id Ruang</label>
                <input name="id_ruang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Ruang" value="<?php echo e($inventaris->id_ruang); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Kode Inventaris</label>
                <input name="kode_inventaris" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Inventaris" value="<?php echo e($inventaris->kode_inventaris); ?>">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Id Petugas</label>
                <input name="id_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Petugas" value="<?php echo e($inventaris->id_petugas); ?>">
                </div>


                <button type="submit" class="btn btn-warning">Update</button>
                  </form>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ujikelayakan\resources\views/inventaris/edit.blade.php ENDPATH**/ ?>