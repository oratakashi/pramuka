<script>
    $(document).ready(function () {
        $('#bulan-table').DataTable();
        $('#bulan').change(function (e) { 
            e.preventDefault();
            if($(this).find('option:selected').val() != ''){
                getMonth($(this).find('option:selected').val());
            }else{
                $('#bulan-table').DataTable().clear().destroy();
                $('#bulan-table').DataTable();
            }
        });
    });
    function getMonth (month) {  
        $('#bulan-table').DataTable().clear().destroy();
        var t = $('#bulan-table').DataTable({
            "ajax": {
                url: "{{ base_url('api/article/bulan/') }}"+month,
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
</script>