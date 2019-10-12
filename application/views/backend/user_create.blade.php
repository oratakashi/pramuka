@extends('backend.layouts.master')

@section('title', 'Tambah Pengguna - Pramuka Lumajang')

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
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <header class="card-header">
                        {{ "Tambah Pengguna" }} <a href="{{ base_url('admin/user.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a>
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                    </header>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                                <aside class="profile-nav col-lg-3">
                                    <section class="card">
                                        <div class="user-heading round">
                                            <a href="#">
                                                <img id="photo" src="{{base_url('media/photo_user/no-pict.png')}}" alt="">
                                            </a>
                                            <div class="form-group">
                                                <div class="myfileupload-buttonbar" style="margin-top:20px">
                                                    <label class="btn btn-primary">
                                                        <span>Upload Foto</span>
                                                        <input id="file" type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'photo')" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </aside>
                                <aside class="profile-info col-lg-9">
                                    <section class="card">
                                        <div class="card-body bio-graph-info">
                                            <div class="form-group col-md-4" id="lev_user">
                                                <h1>Pilih tipe : </h1>
                                                <select name="lev_user" id="lev_user" class="form-control">
                                                    <option value="">Pilih Jenis Pengguna</option>
                                                    <option value="Administrator">Administrator</option>
                                                    <option value="Pengurus">Pengurus</option>
                                                </select>
                                            </div>
                                        </div>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </div>
                    </form>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection