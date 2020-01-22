@extends('backend.layouts.master')

@section('title', 'Tambah Pengurus -  Pramuka Lumajang')

@section('container')
<script>
    function tampilkanPreview(gambar,idpreview){
        var gb = gambar.files;
        for (var i = 0; i < gb.length; i++){
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                })(preview);
                reader.readAsDataURL(gbPreview);
            }else{
                alert("Type file tidak sesuai. Khusus image.");
            }
        }
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Ubah Pengurus" }} <a href="{{ base_url('admin/pengurus.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="{{ base_url('admin/pengurus/').$pengurus['id_pengurus'] }}/update.aspx" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <center>
                                    <a class="user-avatar" href="#">
                                        <img id="photo" class="thumb-md mb-2 rounded-circle" src="{{base_url('media/pengurus/').$pengurus['photo']}}" style="width:150px;height:150px" alt="">
                                    </a>
                                    </center>
                                    <div class="form-group">
                                        <center>
                                        <div class="myfileupload-buttonbar" style="margin-top:20px">
                                            <label class="btn btn-primary">
                                                <span>Upload Foto</span>
                                                <input id="file" type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'photo')" />
                                            </label>
                                        </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Nama Pengurus</label>
                                    <input type="text" name="nama" id="" class="form-control" value="{{ $pengurus['nama'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan Pengurus</label>
                                    <input type="text" name="jabatan" id="" class="form-control" value="{{ $pengurus['jabatan'] }}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Simpan" class="btn btn-primary">
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