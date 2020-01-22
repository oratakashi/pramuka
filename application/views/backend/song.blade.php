@extends('backend.layouts.master')

@section('title', 'Daftar Lagu - Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Kelola Lagu" }} </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Nama File</th>
                                        <th>Total Download</th>
                                        <th>Pengunggah</th>
                                        <th>Ukuran</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $size = 0; @endphp
                                    @foreach($data_lagu as $row)
                                        <tr>
                                            <td>{{ $row['nama_file'] }}</td>
                                            <td>{{ $row['total_download'] }}</td>
                                            <td>{{ $row['nama'] }}</td>
                                            <td>
                                                @php
                                                    $sizeMB = $row['size'] / 1024;
                                                    $sizeMB = round($sizeMB, 2);
                                                    $size += $sizeMB;
                                                    echo $sizeMB." MB";
                                                @endphp
                                            </td>
                                            <td>
                                                <a href="{{ base_url('media/music/').$row['nama_file'] }}" target="blank"><button class="btn btn-primary"><i class="fa fa-cloud-download"></i></button></a>
                                                <a href="{{ base_url('admin/song/').$row['id_lagu'].'/delete.aspx' }}"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-top:30px">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <p>Ukuran Total : {{ $size }}Mb</p>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection