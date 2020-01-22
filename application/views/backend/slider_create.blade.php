@extends('backend.layouts.master')

@section('title', 'Tambah Slider -  Pramuka Lumajang')

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
                    <h4 class="card-title mb-2">{{ "Tambah Slider" }} <a href="{{ base_url('admin/slider.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="{{ base_url('admin/slider/create.aspx') }}" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <center><img id="photo" src="{{base_url('media/slider/no-image.jpg')}}" alt="" style="width:300px;height:150px"></center>
                                </div>
                                <div class="form-group">
                                    <center><label for="">Pilih Gambar yang akan di upload</label>
                                    <div class="myfileupload-buttonbar" style="margin-top:20px">
                                        <label class="btn btn-primary">
                                            <span>Pilih Gambar</span>
                                            <input id="file" type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'photo')"/>
                                        </label>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Keterangan Gambar</label>
                                    <input type="text" name="judul" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Upload Sekarang" class="btn btn-primary">
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