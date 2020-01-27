<div class="tab-pane fade" id="visi" role="tabpanel" aria-labelledby="all-tab">
    <br>
    <h3>Kelola Visi<a href="{{ base_url('admin/visi/create.html') }}"><button class="btn btn-sm btn-primary" style="margin-left:20px"><i class="fa fa-plus"></i> Tambah</button></a></h3>
    <hr/>
    <table  class="display table table-bordered table-striped" id="visi-table">
        <thead>
            <tr>
                <th>Judul Visi</th>
                <th>Pembuat</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_visi as $row)
                <tr>
                    <td>
                        @php
                            if(strlen($row['judul_visi'])>40){
                                echo substr($row['judul_visi'], 0, 40)."...";
                            }else{
                                echo $row['judul_visi'];
                            }
                        @endphp
                    </td>
                    <td>
                        {{$row['nama']}}
                    </td>
                    <td>
                        @if($row['status']==1)
                            <span class="badge badge-success">Aktif</span>
                        @elseif($row['status']==0)
                            <span class="badge badge-danger">Tidak Aktif</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <?php if($row['status'] == 1){ ?>
                                <a href="{{ base_url('admin/visi/').$row['id_visi'] }}/deactivated.aspx"><button type="button" class="btn btn-sm btn-danger">Nonaktifkan</button></a>
                            <?php } else if($row['status'] == 0) {?>
                                <a href="{{ base_url('admin/visi/').$row['id_visi'] }}/activated.aspx"><button type="button" class="btn btn-sm btn-success">Aktifkan</button></a>
                            <?php } ?>
                            <?php if($row['status'] == 1){ ?>
                                <button type="button" class="btn btn-sm btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                            <?php } else if($row['status'] == 0) {?>
                                <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>    
                            <?php } ?>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ base_url('admin/visi/').$row['id_visi'] }}.html">Ubah</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ base_url('admin/visi/').$row['id_visi'] }}/delete.aspx">Hapus</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        var a = $("#visi-table").DataTable({
            lengthChange: !1,
            buttons: ["print"],
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
        a.buttons().container().appendTo("#visi-table_wrapper .col-md-6:eq(0)"), $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        })
    });
</script>