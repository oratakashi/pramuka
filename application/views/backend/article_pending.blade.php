@extends('backend.layouts.master')

@section('title', 'Daftar Artikel Pending - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Artikel Pending" }} 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Tgl Post</th>
                                                <th>Penulis</th>
                                                <th>Status</th>
                                                <th>Kategori</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--    
                                                Mengko Bagian Iki di Looping anggo foreach, 
                                                Contoh e delok seng wes terimplementasi

                                                Format :
                                                id : Tahun 2 digit, bulan 2 digit sisane nomer urut
                                                tgl : 21 Oktober 2019
                                                nama : nama seng post
                                                status : Aktif, Tidak Aktif, nek aktif 1 nek ga aktif 0, warna abang karo ijo
                                             -->
                                            <tr>
                                                <td>Lorem Ipsum</td>
                                                <td>21 Oktober 2019</td>
                                                <td>Administrator</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>Lorem Ipsum</td>
                                                <td>
                                                    <a href="{{ base_url('admin/article/').'19100001' }}/views.html" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                                    <a href="{{ base_url('admin/article/').'19100001' }}/activated.aspx" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                                    <a href="{{ base_url('admin/article/').'19100001' }}/deactivated.aspx" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Tgl Post</th>
                                                <th>Penulis</th>
                                                <th>Status</th>
                                                <th>Kategori</th>
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