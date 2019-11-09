@extends('backend.layouts.master')

@section('title', 'Profil Pengguna - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Profil" }}
                                    <span class="tools pull-right">
                                        <a href="{{ base_url('admin/index.html') }}"><button class="btn btn-sm btn-danger">Kembali</button></a>
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
                                                <h1>Kiriman Artikel ({{ $jml_post }})</h1>
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
                                                                        <?php if($_SESSION['lev_user'] == 'Administrator'){ ?>
                                                                        <a href="{{ base_url('admin/article/pending.html') }}"><span class="badge badge-warning">Menunggu Persetujuan</span></a>
                                                                        <?php } else { ?>
                                                                            <span class="badge badge-warning">Menunggu Persetujuan</span>
                                                                        <?php } ?>
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