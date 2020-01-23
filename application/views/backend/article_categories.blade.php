@extends('backend.layouts.master')

@section('title', 'Daftar Kategori Artikel -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Kelola Kategori Artikel" }} <a href="{{ base_url('admin/article/categories/create.html') }}"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a></h4>


                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $category)
                                <tr>
                                    <th>{{ $category['nm_kategori'] }}</th>
                                    <td>
                                        <a href="{{ base_url('admin/article/categories/').$category['id_kategori'] }}/delete.aspx" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Hapus</a>
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