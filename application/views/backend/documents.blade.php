@extends('backend.layouts.master')

@section('title', 'Daftar Dokumen - Pramuka Lumajang')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Dokumen" }} 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>Nama File</th>
                                                <th>Total Download</th>
                                                <th>Pengunggah</th>
                                                <th>Ukuran</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama File</th>
                                                <th>Total Download</th>
                                                <th>Pengunggah</th>
                                                <th>Ukuran</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2">
                                        <p>Ukuran Total : 0 Mb</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection