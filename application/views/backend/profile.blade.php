@extends('backend.layouts.master')

@section('title', 'Profil -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">
                        {{ "Profil" }}
                        <span class="tools pull-right">
                            @if($_SESSION['lev_user']=='Administrator')
                                <a href="{{ base_url('admin/index.html') }}"><button class="btn btn-sm btn-danger">Kembali</button></a>
                            @elseif($_SESSION['lev_user']=='Pengurus')
                                <a href="{{ base_url('pengurus/index.html') }}"><button class="btn btn-sm btn-danger">Kembali</button></a>
                            @endif
                        </span>
                    </h4>
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
                            <hr/>
                            <h4>Kiriman Artikel ({{ $jml_post }})</h4>
                            <div class="row">
                                <div class="col-md-12">
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
                                                    <td>
                                                        @php
                                                            if(strlen($row['judul'])>40){
                                                                echo substr($row['judul'], 0, 40)."...";
                                                            }else{
                                                                echo $row['judul'];
                                                            }
                                                        @endphp
                                                    </td>
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
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection