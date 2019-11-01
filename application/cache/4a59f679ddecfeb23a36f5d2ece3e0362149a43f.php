<div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
    <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Jumlah Artikel</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($row['nama']); ?></td>
                        <td><?php echo e($row['jml']); ?> Artikel</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Jumlah Artikel</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <p class="text-danger">Rangking di hitung berdasarkan jumlah terbanyak posting artikel dan dalam status aktif</p>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/summary/all.blade.php ENDPATH**/ ?>