@extends('backend.layouts.master')

@section('title', 'Upload Dokumen - Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Upload Dokumen Baru" }} </h4>
                    <br/>
                    <form action="{{ base_url('admin/documents/upload.aspx') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <center><label for="">Pilih File yang akan di upload</label>
                            <div class="myfileupload-buttonbar" style="margin-top:20px">
                                <label class="btn btn-primary">
                                    <span>Pilih Berkas</span>
                                    <input id="file" type="file" name="document" onchange="" />
                                </label>
                            </div></center>
                        </div>
                        <div class="form-group">
                            <center><label for="" id="filename"></label></center>
                        </div>
                        <div class="form-group">
                            <center><input type="submit" value="Upload Sekarang" class="btn btn-primary"></center>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#filename').html(fileName);
        });
    });
</script>
@endsection