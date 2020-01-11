@extends('backend.layouts.master')

@section('title', 'Daftar Pengurus - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Pengurus" }} <a href="{{ base_url('admin/pengurus/create.html') }}"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>Nama Pengurus</th>
                                                <th>Jabatan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pengurus as $row)
                                            <tr>
                                                <th><img alt="" class="rounded-circle" style="height:32px; width:32px; margin-right:10px" src="{{ base_url('media/pengurus/') }}{{ $row['photo'] }}"> {{ $row['nama'] }}</th>
                                                <td>{{ $row['jabatan'] }}</td>
                                                <td>
                                                    <a href="{{ base_url('admin/pengurus/').$row['id_pengurus'] }}/update.html" class="btn btn-success"><i class="fa fa-pencil"></i> Ubah</a>
                                                    <a href="{{ base_url('admin/pengurus/').$row['id_pengurus'] }}/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Pengurus</th>
                                                <th>Jabatan</th>
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