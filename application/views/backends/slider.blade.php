@extends('backend.layouts.master')

@section('title', 'Informasi Website - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Informasi Website" }} <a href="{{ base_url('admin/slider/create.html') }}"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Keterangan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                <td>
                                                    <img src="{{ base_url('media/slider/').$row['image'] }}" style="width:120px;height:80px" alt="">
                                                </td>
                                                <td>{{ $row['title'] }}</td>
                                                <td>
                                                    <a href="{{ base_url('admin/slider/').$row['id_slider'] }}/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Keterangan</th>
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