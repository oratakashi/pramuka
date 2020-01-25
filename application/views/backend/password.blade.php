@extends('backend.layouts.master')

@section('title', 'Ganti Kata Sandi -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if($_SESSION['lev_user']=='Administrator')
                    <form action="{{ base_url('admin/password.aspx') }}" method="post" enctype="multipart/form-data">
                @elseif($_SESSION['lev_user']=='Pengurus')
                    <form action="{{ base_url('pengurus/password.aspx') }}" method="post" enctype="multipart/form-data">
                @endif
                <div class="card-body">
                    <h4 class="card-title mb-2">
                        {{ "Ganti Kata Sandi" }}
                        <span class="tools pull-right">
                            <a href="#" id="btnBack"><button class="btn btn-sm btn-danger">Kembali</button></a>
                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary">
                        </span>
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ base_url('assets/backend/img/password.svg') }}" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Kata sandi lama</label>
                                <input type="password" name="old_pass" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Kata sandi baru</label>
                                <input type="password" name="new_pass" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body-->
                </form>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<script>
    $(document).ready(function () {
        $('form').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
        });
        $('#btnBack').click(function (e) { 
            e.preventDefault();
            @if($_SESSION['lev_user']=='Administrator')
                window.location.replace("{{ base_url('admin/index.html') }}");
            @elseif($_SESSION['lev_user']=='Pengurus')
                window.location.replace("{{ base_url('pengurus/index.html') }}");
            @endif
        });
    });
</script>
@endsection