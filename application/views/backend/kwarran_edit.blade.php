@extends('backend.layouts.master')

@section('title', 'Ubah Kwarran -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Ubah Kwarran" }} <a href="{{ base_url('admin/informasi.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="{{ base_url('admin/kwarran/').$data['id_kecamatan'] }}/update.aspx" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ base_url('assets/backend/img/visi.svg') }}" alt="" style="margin-top:150px">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">No Kwarran</label>
                                    <input type="text" name="no" id="" readonly class="form-control" value="{{$data['id_kecamatan']}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Kwarran</label>
                                    <input type="text" name="nama" id="" class="form-control" value="{{ $data['nama_kecamatan'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Gugus Depan</label>
                                    <input type="text" name="gugusdepan" id="" class="form-control" value="{{ $data['gugusdepan'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Anggota</label>
                                    <input type="text" name="anggota" id="" class="form-control" value="{{$data['anggota']}}">
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