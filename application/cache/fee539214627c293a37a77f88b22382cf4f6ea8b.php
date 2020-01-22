<div class="tab-pane fade show active" id="slider" role="tabpanel" aria-labelledby="all-tab">
    <div class="adv-table">
        <br>
        <h3>Kelola Slider<a href="<?php echo e(base_url('admin/slider/create.html')); ?>"><button class="btn btn-sm btn-primary" style="margin-left:20px"><i class="fa fa-plus"></i> Tambah</button></a></h3>
        <hr>
        <table  class="display table table-bordered table-striped" id="no-config">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="<?php echo e(base_url('media/slider/').$row['image']); ?>" style="width:120px;height:80px" alt="">
                    </td>
                    <td><?php echo e($row['title']); ?></td>
                    <td>
                        <a href="<?php echo e(base_url('admin/slider/').$row['id_slider']); ?>/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/information/slider.blade.php ENDPATH**/ ?>