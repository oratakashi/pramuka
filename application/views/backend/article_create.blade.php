@extends('backend.layouts.master')

@section('title', 'Tambah Artikel -  Pramuka Lumajang')

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
                    <h4 class="card-title mb-2">{{ "Tambah Artikel" }} <a href="{{ base_url('admin/article.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="{{ base_url('admin/article/create.aspx') }}" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <center>
                                    <a class="user-avatar" href="#">
                                        <img id="photo" class="thumb-md mb-2" src="{{base_url('media/photo_user/no-pict.png')}}" style="width:250px;height:250px" alt="">
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
                                <div class="row" id="form"> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Judul</label>
                                            <input type="text" required name="judul" id="" class="form-control">
                                        </div>  
                                        <div class="form-group">
                                            <label for="">Kategori</label> 
                                            <select name="kategori" id="" class="form-control">
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($data_kat as $data)
                                                    <option value="{{ $data['id_kategori'] }}">{{ $data['nm_kategori'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label for="">Isi Artikel</label>
                                            <textarea name="isi_artikel" class="richtext form-controls" id="" cols="100%" rows="200"></textarea>
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" value="Simpan" class="btn btn-success float-right">Simpan</button>
                                    </div>
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