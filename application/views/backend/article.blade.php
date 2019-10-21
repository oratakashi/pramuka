@extends('backend.layouts.master')

@section('title', 'Daftar Artikel - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Artikel" }} 
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
                                                <td><span class="badge badge-success">Aktif</span></td>
                                                <td>Lorem Ipsum</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- Button iki di kei if else, nek status e aktif, tulisan e dadi nonaktifkan -->
                                                        <a href="{{ base_url('admin/article/').'19100001' }}/deactivated.aspx"><button type="button" class="btn btn-sm btn-danger">Nonaktifkan</button></a>
                                                        <!-- Nek Status e non aktif di walik -->
                                                        <button type="button" class="btn btn-sm btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- 19100001 kui contoh ID ne -->
                                                            <a class="dropdown-item" href="{{ base_url('admin/article/').'19100001' }}.html">Ubah</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="{{ base_url('admin/article/').'19100001' }}/delete.aspx">Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lorem Ipsum</td>
                                                <td>21 Oktober 2019</td>
                                                <td>Administrator</td>
                                                <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                                <td>Lorem Ipsum</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- Button iki di kei if else, nek status e aktif, tulisan e dadi nonaktifkan -->
                                                        <a href="{{ base_url('admin/article/').'19100002' }}/activated.aspx"><button type="button" class="btn btn-sm btn-success">Aktifkan</button></a>
                                                        <!-- Nek Status e non aktif di walik -->
                                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- 19100002 kui contoh ID ne -->
                                                            <a class="dropdown-item" href="{{ base_url('admin/article/').'19100002' }}.html">Ubah</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="{{ base_url('admin/article/').'19100002' }}/delete.aspx">Hapus</a>
                                                        </div>
                                                    </div>
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