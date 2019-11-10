@extends('backend.layouts.master')

@section('title', 'Informasi Website - Pramuka Lumajang')

@section('container')
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    @if($_SESSION['lev_user']=='Administrator')
                        <form action="{{ base_url('admin/password.aspx') }}" method="post" enctype="multipart/form-data">
                    @else
                        <form action="{{ base_url('pengurus/password.aspx') }}" method="post" enctype="multipart/form-data">
                    @endif
                    <header class="card-header">
                        {{ "Ganti Kata Sandi" }}
                            <span class="tools pull-right">
                                <a href="#" id="btnBack"><button class="btn btn-sm btn-danger">Kembali</button></a>
                                <input type="submit" value="Simpan" class="btn btn-sm btn-primary">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                    </header>
                    <div class="card-body">
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
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
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
            window.location.replace("{{ base_url('admin/index.html') }}");
        });
    });
</script>
@endsection