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
                                <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
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
                                </table>
                            </div>
                        </div>
                    </h4>
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection