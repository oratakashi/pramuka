<script>
    $(document).ready(function () {
        $('#tahun-table').DataTable();
        $('#tahun').change(function (e) { 
            e.preventDefault();
            if($(this).find('option:selected').val() != ''){
                getYear($(this).find('option:selected').val());
            }else{
                $('#tahun-table').DataTable().clear().destroy();
                $('#tahun-table').DataTable();
            }
        });
    });
    function getYear (year) {  
        $('#tahun-table').DataTable().clear().destroy();
        var t = $('#tahun-table').DataTable({
            "ajax": {
                url: "<?php echo e(base_url('api/article/tahun/')); ?>"+year,
                type: "get",
                dataSrc: 'data'
            },
            "columns": [
                {
                    data: null
                },
                {
                    data: "nama"
                },
                {
                    data: "jml"
                }
            ]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    }
</script><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/summary/tahun_script.blade.php ENDPATH**/ ?>