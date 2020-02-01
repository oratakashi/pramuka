<div class="tab-pane fade" id="kwaran" role="tabpanel" aria-labelledby="all-tab">
    <br>
    <h3>Kelola Kwarran</h3>
    <hr/>
    <table  class="display table table-bordered table-striped" id="kwaran-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kwarran</th>
                <th>Gugus Depan</th>
                <th>Anggota</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data_kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['id_kecamatan']); ?></td>
                    <td><?php echo e($row['nama_kecamatan']); ?></td>
                    <td><?php echo e($row['gugusdepan']); ?></td>
                    <td><?php echo e($row['anggota']); ?></td>
                    <td>
                        <a href="<?php echo e(base_url('admin/kwarran/').$row['id_kecamatan']); ?>.html" class="btn btn-primary">
                            <i class="fa fa-pencil"></i> Ubah
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        var a = $("#kwaran-table").DataTable({
            lengthChange: !1,
            buttons: ["print"],
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
        a.buttons().container().appendTo("#kwaran-table_wrapper .col-md-6:eq(0)"), $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        })
    });
</script><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/information/kwarran.blade.php ENDPATH**/ ?>