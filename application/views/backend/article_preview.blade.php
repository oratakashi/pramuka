@extends('backend.layouts.master')

@section('title', 'Preview Artikel -  Pramuka Lumajang')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">{{ "Preview Artikel" }} <a href="{{ base_url('admin/article/pending.html') }}"><button class="btn btn-sm btn-danger">Batal</button></a></h4>


                    <img src="{{base_url('media/article/').$data_article['foto_header'] }}" alt="" style="width:100%;height:350px">
                    <!-- Judul Artikel -->
                    <h3 style="margin-top:20px">{{ $data_article['judul'] }}</h3>
                    <span style="margin-top:10px" class="text-primary">{{ $data_article['tgl_post'] }}</span>
                    <div style="margin-top:30px">
                        @php echo $data_article['artikel'] @endphp
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ base_url('admin/article/').$data_article['id_artikel'] }}/activated.aspx" class="btn btn-sm btn-success col-md-12"><i class="fa fa-check"></i></a>
                        </div>
                        <div class="col-md-6">
                        <a href="{{ base_url('admin/article/').$data_article['id_artikel'] }}/deactivated.aspx" class="btn btn-sm btn-danger col-md-12"><i class="fa fa-times"></i></a>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection