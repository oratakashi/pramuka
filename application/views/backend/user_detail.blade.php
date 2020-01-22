@extends('backend.layouts.master')

@section('title', 'Daftar Pengguna -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">
                        {{ "Detail Pengguna" }}
                        <span class="tools pull-right">
                            <a href="{{ base_url('admin/user.html') }}"><button class="btn btn-sm btn-danger">Kembali</button></a>
                        </span>
                        <div class="row" style="margin-top:25px">
                            <div class="col-lg-3">
                                <div class="member-content-area">
                                    <div class="member-contact-content d-flex align-items-center mb-4">
                                        <div class="contact-thumb">
                                            <img alt="" src="{{base_url('media/photo_user/').$data_user['photo']}}">
                                        </div>
                                        <div class="member-contact-info">
                                            <h5>{{ $data_user['nama'] }}</h5>
                                            <span class="badge badge-success badge-pill">{{ $data_user['lev_user'] }}</span>
                                        </div>
                                    </div>
                                    <a href="{{base_url('admin/user/').$data_user['id_user']}}.html">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <div class="img-icon"><i class="fa fa-user"></i></div>
                                            </li>
                                            <li class="nav-item">
                                                <p>Profil</span></p>
                                            </li>
                                        </ul>
                                    </a>
                                    <br>
                                    <a href="{{base_url('admin/user/').$data_user['id_user']}}/article.html">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <div class="img-icon"><i class="fa fa-book"></i></div>
                                            </li>
                                            <li class="nav-item">
                                                <p>Artikel <span class="badge badge-danger pull-right" style="margin-left:50px;margin-top:5px">{{ $jml_post }}</span></p>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h4>ID : {{ $data_user['id_user'] }}</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span>Nama </span>: {{ $data_user['nama'] }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span>Level User </span>: {{ $data_user['lev_user'] }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span>Email </span>: {{ $data_user['email'] }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span>No Hp</span>: {{ $data_user['no_hp'] }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><span>Alamat</span>: {{ $data_user['alamat'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h4>
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection