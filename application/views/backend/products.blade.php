@extends('backend.layouts.master')

@section('title', 'Daftar Produk -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Kelola Produk" }}</h4>

                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Pemilik</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{ $row['id_product'] }}</td>
                                    <td>{{ $row['nm_product'] }}</td>
                                    <td>{{ "Rp " . number_format($row['harga'],2,',','.') }}</td>
                                    <td>{{ $row['nama'] }}</td>
                                    <td>
                                        <a href="{{ base_url('admin/products/').$row['id_product'] }}.html" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ base_url('admin/products/').$row['id_product'] }}/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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