@extends('backend.layouts.master')

@section('title', 'Tambah Kategori Artikel - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Tambah Kategori Artikel" }} <a href="{{ base_url('admin/article/categories.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <form action="{{ base_url('admin/article/categories/create.aspx') }}" method="post" enctype="multipart/form-data">
                                    <!-- Code Form -->
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection