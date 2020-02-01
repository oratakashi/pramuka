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
            @foreach($data_kecamatan as $row)
                <tr>
                    <td>{{$row['id_kecamatan']}}</td>
                    <td>{{$row['nama_kecamatan']}}</td>
                    <td>{{$row['gugusdepan']}}</td>
                    <td>{{$row['anggota']}}</td>
                    <td>
                        <a href="{{base_url('admin/kwarran/').$row['id_kecamatan']}}.html" class="btn btn-primary">
                            <i class="fa fa-pencil"></i> Ubah
                        </a>
                    </td>
                </tr>
            @endforeach
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
</script>