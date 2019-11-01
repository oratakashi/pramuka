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
                                                <li class="nav-item"><a class="nav-link" href="{{base_url('admin/user/').$data_user['id_user']}}.html"> <i class="fa fa-user"></i> Profile</a></li>
                                                <li class="active nav-item"><a class="nav-link" href="{{base_url('admin/user/').$data_user['id_user']}}/article.html"> <i class="fa fa-book"></i> Artikel <span class="badge badge-danger pull-right r-activity">{{ $jml_post }}</span></a></li>
                                            </ul>
                                        </section>
                                    </aside>
                                    <aside class="profile-info col-lg-9">
                                        <section class="card">
                                            <div class="card-body bio-graph-info">
                                                <div class="adv-table">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Judul</th>
                                                                <th>Tgl Post</th>
                                                                <th>Kategori</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($data_article as $row)
                                                                <tr>
                                                                    <td>{{ $row['judul'] }}</td>
                                                                    <td>{{ $row['tgl_post'] }}</td>
                                                                    <td>{{ $row['nm_kategori'] }}</td>
                                                                    <td> <?php if($row['status'] == "1") {?>
                                                                    <span class="badge badge-success">Aktif</span>
                                                                    <?php } else if($row['status'] == "0"){ ?>
                                                                        <span class="badge badge-danger">Tidak Aktif</span>
                                                                    <?php } else if($row['status'] == "2"){ ?>
                                                                        <span class="badge badge-warning">Menunggu Persetujuan</span>
                                                                    <?php } ?>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Judul</th>
                                                                <th>Tgl Post</th>
                                                                <th>Kategori</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
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