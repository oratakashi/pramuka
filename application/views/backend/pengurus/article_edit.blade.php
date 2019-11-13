@extends('backend.layouts.master')

@section('title', 'Ubah Artikel - Pramuka Lumajang')

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
                                {{ "Ubah Artikel" }} <a href="{{ base_url('pengurus/article.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>

                            <div class="card-body">
                                <form action="{{ base_url('pengurus/article/').$id }}/update.aspx" method="post" enctype="multipart/form-data">
                                    <!-- Code Form -->
                                    <div class="card-body">
                                        <div class="row">
                                            <aside class="profile-nav col-lg-3">
                                                <section class="card">
                                                    <div class="">
                                                        <center><a href="#">
                                                            <img id="photo" src="{{base_url('media/product/no-image.jpg')}}" alt="" style="width:250px;height:250px">
                                                        </a></center>
                                                        <center><div class="form-group">
                                                            <div class="myfileupload-buttonbar" style="margin-top:20px">
                                                                <label class="btn btn-primary">
                                                                    <span>Upload Foto</span>
                                                                    <input id="file" type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'photo')" />
                                                                </label>
                                                            </div>
                                                        </div></center>
                                                    </div>
                                                </section>
                                            </aside>
                                            <aside class="profile-info col-lg-9">
                                                <section class="card">
                                                    <div class="card-body bio-graph-info"> 
                                                        <div class="row" id="form"> 
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Judul</label>
                                                                    <input type="text" required name="judul" id="" class="form-control"  value="{{ $artikel['judul'] }}">
                                                                </div>  
                                                                <div class="form-group">
                                                                    <label for="">Kategori</label> 
                                                                    <select name="kategori" id="" class="form-control">
                                                                        @foreach ($kategori as $data) 
                                                                            <?php if($artikel['id_kategori'] == $data['id_kategori']){?> 
                                                                                <option value="<?= $data['id_kategori'];?>" selected>
                                                                                    <?= $data['nm_kategori'];?>
                                                                                </option>  
                                                                            <?php }else{   ?>
                                                                                <option value="<?= $data['id_kategori'];?>">
                                                                                    <?= $data['nm_kategori'];?>
                                                                                </option>  
                                                                            <?php }?>  
                                                                        @endforeach
                                                                        
                                                                    </select>
                                                                </div>  
                                                                <div class="form-group">
                                                                    <label for="">Isi Artikel</label> 
                                                                    <textarea name="isi_artikel" class="richtext form-controls" id="" cols="100%" rows="200">{{ $artikel['judul'] }}</textarea>
                                                                </div> 
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button type="submit" value="Simpan" class="btn btn-success float-right">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </aside>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection