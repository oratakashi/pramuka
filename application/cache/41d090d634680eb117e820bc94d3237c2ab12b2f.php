<script>
    $(document).ready(function () {
        $('#periode-table').dataTable( {
            "aaSorting": [[ 0, "desc" ]]
        } );
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
            alert('submited');
        });
    });
</script><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/summary/periode_script.blade.php ENDPATH**/ ?>