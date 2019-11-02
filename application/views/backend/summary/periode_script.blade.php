<script>
    $(document).ready(function () {
        $('#periode-table').DataTable();
        $('#start-datepicker').datepicker({
            todayBtn: "linked",
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
            orientation: "top",
            language: 'en',
            templates: {
                leftArrow: '<i class="fa fa-angle-left"></i>',
                rightArrow: '<i class="fa fa-angle-right"></i>'
            }
        });
        $('#end-datepicker').datepicker({
            todayBtn: "linked",
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
            orientation: "top",
            language: 'en',
            templates: {
                leftArrow: '<i class="fa fa-angle-left"></i>',
                rightArrow: '<i class="fa fa-angle-right"></i>'
            }
        });
        $('#form-periode').submit(function (e) { 
            e.preventDefault();
            getPeriodic(
                $("#start").val(),
                $("#end").val()
            );
        });
    });
    function getPeriodic(start, end) { 
        $('#periode-table').DataTable().clear().destroy();
        var t = $('#periode-table').DataTable({
            "ajax": {
                url: "{{ base_url('api/article/periode/') }}"+start+"/"+end,
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