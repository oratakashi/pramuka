@extends('backend.layouts.master')

@section('title', 'Tambah Kategori Artikel - Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Tambah Kategori Artikel" }} <a href="{{ base_url('admin/article/categories.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a> </h4>
                    <br/>
                    <form action="{{ base_url('admin/article/categories/create.aspx') }}" method="post" enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama Kategori Artikel</label>
                                    <input type="text" required name="nm_kategori" id="" class="form-control">
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <button type="submit" value="Simpan" class="btn btn-success float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection