@extends('backend.layouts.master')

@section('title', 'Daftar Artikel Pending -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Kelola Artikel Pending" }} </h4>

                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tgl Post</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $artikel)
                                <tr>
                                    <td>
                                        @php
                                            if(strlen($artikel['judul'])>40){
                                                echo substr($artikel['judul'], 0, 40)."...";
                                            }else{
                                                echo $artikel['judul'];
                                            }
                                        @endphp
                                    </td>
                                    <td>{{ $artikel['tgl_post'] }}</td>
                                    <td>{{ $artikel['nama'] }}</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>{{ $artikel['nm_kategori'] }}</td>
                                    <td>
                                        <a href="{{ base_url('admin/article/').$artikel['id_artikel'] }}/views.html" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                        <a href="{{ base_url('admin/article/').$artikel['id_artikel'] }}/activated.aspx" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="{{ base_url('admin/article/').$artikel['id_artikel'] }}/deactivated.aspx" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection