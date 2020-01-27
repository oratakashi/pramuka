<div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="all-tab">
    <br>
    <h3>Kelola Misi<a href="{{ base_url('admin/misi/create.html') }}"><button class="btn btn-sm btn-primary" style="margin-left:20px"><i class="fa fa-plus"></i> Tambah</button></a></h3>
    <hr/>
    <table  class="display table table-bordered table-striped" id="misi-table">
        <thead>
            <tr>
                <th>Judul Misi</th>
                <th>Pembuat</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        var a = $("#misi-table").DataTable({
            lengthChange: !1,
            buttons: ["print"],
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
        a.buttons().container().appendTo("#misi-table_wrapper .col-md-6:eq(0)"), $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        })
    });
</script>