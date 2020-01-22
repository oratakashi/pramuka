@extends('backend.layouts.master')

@section('title', 'Daftar Pengurus -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Kelola Pengurus" }} <a href="{{ base_url('admin/pengurus/create.html') }}"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a></h4>


                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Pengurus</th>
                                <th>Jabatan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengurus as $row)
                            <tr>
                                <th><img alt="" class="rounded-circle" style="height:32px; width:32px; margin-right:10px" src="{{ base_url('media/pengurus/') }}{{ $row['photo'] }}"> {{ $row['nama'] }}</th>
                                <td>{{ $row['jabatan'] }}</td>
                                <td>
                                    <a href="{{ base_url('admin/pengurus/').$row['id_pengurus'] }}/update.html" class="btn btn-success"><i class="fa fa-pencil"></i> Ubah</a>
                                    <a href="{{ base_url('admin/pengurus/').$row['id_pengurus'] }}/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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