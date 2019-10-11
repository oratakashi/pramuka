@extends('backend.layouts.master')

@section('title', 'User')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Pengguna" }}
                                    <span class="tools pull-right">
                                        <a href="" class="fa fa-plus"></a>
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
                                                    <th><img alt="" class="rounded-circle" style="height:32px; margin-right:10px" src="{{ base_url('media/photo_user/') }}{{ $user['photo'] }}"> {{ $user['nama'] }}</th>
                                                    <th>{{ $user['lev_user'] }}</th>
                                                    <th>{{ $user['email'] }}</th>
                                                    <th>
                                                        <a href="" class="btn btn-primary"><i class="fa fa-info"></i></a>
                                                        <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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