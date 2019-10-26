@extends('backend.layouts.master')

@section('title', 'Daftar Produk - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Produk" }} 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>ID Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Pemilik</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                                <tr>
                                                    <td>{{ $row['id_product'] }}</td>
                                                    <td>{{ $row['nm_product'] }}</td>
                                                    <td>{{ "Rp " . number_format($row['harga'],2,',','.') }}</td>
                                                    <td>{{ $row['nama'] }}</td>
                                                    <td>
                                                        <a href="{{ base_url('admin/products/').$row['id_product'] }}.html" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ base_url('admin/products/delete/').$row['id_product'] }}.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Pemilik</th>
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