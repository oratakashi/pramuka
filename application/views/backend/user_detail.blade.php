@extends('backend.layouts.master')

@section('title', 'Detail Pengguna - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Detail Pengguna" }}
                                    <span class="tools pull-right">
                                        <a href="{{ base_url('admin/user.html') }}"><button class="btn btn-sm btn-danger">Kembali</button></a>
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="row">
                                    <aside class="profile-nav col-lg-3">
                                        <section class="card">
                                            <div class="user-heading round">
                                                <a href="#">
                                                    <img src="{{base_url('media/photo_user/').$data_user['photo']}}" alt="">
                                                </a>
                                                <h1>{{ $data_user['nama'] }}</h1>
                                                <p>{{ $data_user['lev_user'] }}</p>
                                            </div>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li class="active nav-item"><a class="nav-link" href="profile.html"> <i class="fa fa-user"></i> Profile</a></li>
                                                <li class="nav-item"><a class="nav-link" href="javascript:null"> <i class="fa fa-book"></i> Artikel <span class="badge badge-danger pull-right r-activity">9</span></a></li>
                                            </ul>
                                        </section>
                                    </aside>
                                    <aside class="profile-info col-lg-9">
                                        <section class="card">
                                            <div class="card-body bio-graph-info">
                                                <h1>ID : {{ $data_user['id_user'] }}</h1>
                                                <div class="row">
                                                    <div class="bio-row">
                                                        <p><span>Nama </span>: {{ $data_user['nama'] }}</p>
                                                    </div>
                                                    <div class="bio-row">
                                                        <p><span>Level User </span>: {{ $data_user['lev_user'] }}</p>
                                                    </div>
                                                    <div class="bio-row">
                                                        <p><span>Email </span>: {{ $data_user['email'] }}</p>
                                                    </div>
                                                    <div class="bio-row">
                                                        <p><span>No Hp</span>: {{ $data_user['no_hp'] }}</p>
                                                    </div>
                                                    <div class="bio-row">
                                                        <p><span>Alamat</span>: {{ $data_user['alamat'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </aside>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection