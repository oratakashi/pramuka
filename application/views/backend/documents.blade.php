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
                                            @php $size = 0; @endphp
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{ $row['nama_file'] }}</td>
                                                <td>{{ $row['total_download'] }}</td>
                                                <td>{{ $row['nama'] }}</td>
                                                <td>
                                                    @php
                                                        $sizeMB = $row['size'] / 1024;
                                                        $sizeMB = round($sizeMB, 2);
                                                        $size += $sizeMB;
                                                        echo $sizeMB." MB";
                                                    @endphp
                                                </td>
                                                <td>
                                                    <a href="{{ base_url('media/files/').$row['nama_file'] }}" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a>
                                                    <a href="{{ base_url('admin/documents/').$row['id_dokumen'].'/delete.aspx' }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                        <p>Ukuran Total : {{ $size }}Mb</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection