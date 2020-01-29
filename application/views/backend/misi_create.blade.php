@extends('backend.layouts.master')

@section('title', 'Tambah Misi Baru -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Tambah Misi Baru" }} <a href="{{ base_url('admin/informasi.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="{{ base_url('admin/misi/create.aspx') }}" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ base_url('assets/backend/img/misi.svg') }}" alt="" style="margin-top:150px">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Judul Misi</label>
                                    <input type="text" name="judul" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Detail Misi</label>
                                    <textarea name="isi" id="" cols="30" rows="10" class="richtext"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Simpan" class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection