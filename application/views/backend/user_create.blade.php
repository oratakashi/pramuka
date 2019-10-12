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
                                            <div class="row">
                                                <div class="col-md-4" id="parent_lev_user">
                                                    <div class="form-group">
                                                        <label>Pilih tipe : </label>
                                                        <select name="lev_user" id="lev_user" class="form-control">
                                                            <option value="">Pilih Jenis Pengguna</option>
                                                            <option value="Administrator">Administrator</option>
                                                            <option value="Pengurus">Pengurus</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-8" id="parent_kecamatan">
                                                    <label for="">Pilih Kecamatan</label>
                                                    <select name="kecataman" id="kecamatan" class="form-control">
                                                        <option value="">Pilih Kecamatan</option>
                                                        @foreach ($data_kec as $data)
                                                            <option value="{{ $data['id_kecamatan'] }}">{{ $data['nama_kecamatan'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" id="form">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ID Pengguna</label>
                                                        <input type="text" required name="id_user" readonly id="id_user" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">No Hp</label>
                                                        <input type="text" required name="no_hp" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="password" name="password" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Nama Pengguna</label>
                                                        <input type="text" required name="nama" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="text" required name="email" id="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Alamat</label>
                                                        <input type="text" name="alamat" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" value="Simpan" class="btn btn-success float-right"></button>
                                                </div>
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

<script>
    $(document).ready(function () {
        $('#form').slideUp();
        $('#parent_kecamatan').fadeOut();
        $('#lev_user').change(function (e) { 
            e.preventDefault();
            if($('#lev_user').val()=='Administrator'){
                $.ajax({
                    type: "post",
                    url: "{{ base_url('admin/user/getId.aspx') }}",
                    beforeSend: function() {
                        $('input').attr('disabled', true);
                        $('input').attr('placeholder', "Memuat...");
                    },
                    data: {
                        "type" : "admin"
                    },
                    dataType: "json",
                    success: function (response) {
                        $('input').attr('disabled', false);
                        $('input').attr('placeholder', "");
                        $('#id_user').val(response.data.id_user);
                        $('#form').slideDown();
                    }
                });
                $('#parent_kecamatan').fadeOut();
            }else if($('#lev_user').val()=='Pengurus'){
                $('#parent_kecamatan').fadeIn();
                if($('#kecamatan').val()==''){
                    $('#form').slideUp();
                }
                $('#form').slideUp();
                $('#parent_kecamatan').fadeIn();
            }
        });
        $('#kecamatan').change(function (e) { 
            e.preventDefault();
            if($('#kecamatan').val()!=''){
                $.ajax({
                    type: "post",
                    url: "{{ base_url('admin/user/getId.aspx') }}",
                    beforeSend: function() {
                        $('input').attr('disabled', true);
                        $('input').attr('placeholder', "Memuat...");
                    },
                    data: {
                        "type"          : "pengurus",
                        "id_kecamatan"  : $('#kecamatan').val()
                    },
                    dataType: "json",
                    success: function (response) {
                        $('input').attr('disabled', false);
                        $('input').attr('placeholder', "");
                        $('#id_user').val(response.data.id_user);
                        $('#form').slideDown();
                    }
                });
            }else{
                $('#form').slideUp();
            }
        });
    });
</script>
@endsection