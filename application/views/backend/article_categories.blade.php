@extends('backend.layouts.master')

@section('title', 'Daftar Kategori Artikel - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Kategori Artikel" }} <a href="{{ base_url('admin/article/categories/create.html') }}"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $category)
                                            <tr>
                                                <th>{{ $category['nm_kategori'] }}</th>
                                                <td>
                                                    <a href="{{ base_url('admin/article/categories/').$category['id_kategori'] }}/delete.aspx" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
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