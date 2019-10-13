@extends('backend.layouts.master')

@section('title', 'Daftar Pengguna - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Pengguna" }} <a href="{{ base_url('admin/user/create.html') }}"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>ID Pengguna</th>
                                                <th>Nama Pengguna</th>
                                                <th>Level User</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_user as $user)
                                                <tr>
                                                    <th>{{ $user['id_user'] }}</th>
                                                    <th><img alt="" class="rounded-circle" style="height:32px; width:32px; margin-right:10px" src="{{ base_url('media/photo_user/') }}{{ $user['photo'] }}"> {{ $user['nama'] }}</th>
                                                    <th>{{ $user['lev_user'] }}</th>
                                                    <th>{{ $user['email'] }}</th>
                                                    <th>
                                                        <a href="{{ base_url('admin/user/').$user['id_user'] }}.html" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                                        <a href="{{ base_url('admin/user/').$user['id_user'] }}.aspx" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ base_url('admin/user/delete/').$user['id_user'] }}.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Pengguna</th>
                                                <th>Nama Pengguna</th>
                                                <th>Level User</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection