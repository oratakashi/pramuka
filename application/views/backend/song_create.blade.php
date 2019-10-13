@extends('backend.layouts.master')

@section('title', 'Upload Lagu - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Upload Lagu Baru" }} 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <center><label for="">Pilih File yang akan di upload</label>
                                            <div class="myfileupload-buttonbar" style="margin-top:20px">
                                                <label class="btn btn-primary">
                                                    <span>Pilih lagu</span>
                                                    <input id="file" type="file" name="song" accept="audio/*"  onchange="" />
                                                </label>
                                            </div></center>
                                        </div>
                                        <div class="form-group">
                                            <center><input type="submit" value="Upload Sekarang" class="btn btn-primary"></center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection