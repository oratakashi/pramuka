@extends('backend.layouts.master')

@section('title', 'Ubah Visi -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Ubah Visi" }} <a href="{{ base_url('admin/informasi.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="{{ base_url('admin/visi/').$data['id_visi'] }}/update.aspx" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Judul Visi</label>
                                    <input type="text" name="judul" id="" class="form-control" value="{{$data['judul_visi']}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Detail Visi</label>
                                    <textarea name="isi" id="" cols="30" rows="10" class="richtext">{{$data['isi_visi']}}</textarea>
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