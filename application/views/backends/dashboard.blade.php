@extends('backend.layouts.master')
@section('title', "Dashboard -  Pramuka Lumajang")

@section('container')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($slider as $row)
                    <div class="carousel-item @if($loop->index == 0) {{'active'}} @endif">
                        <img src="{{base_url('media/slider/').$row['image']}}" style="height:300px;width:100%"  alt="First Slide" class="d-block w-100"/>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol terques">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            {{ $user }}
                        </h1>
                        <p>Total Pengurus</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol red">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            {{ $pending }}
                        </h1>
                        <p>Artikel butuh tindakan</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol yellow">
                        <i class="fa fa-archive"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                            {{ $size_doc }}
                        </h1>
                        <p>Total Ukuran Dokumen</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol blue">
                        <i class="fa fa-archive"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            {{ $size_song }}
                        </h1>
                        <p>Total Ukuran Lagu</p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->
        <div class="row">
            <div class="col-lg-4">
                <!--user info table start-->
                <section class="card">
                    <div class="card-body">
                        <a href="#" class="task-thumb">
                        <img alt="" class="rounded-circle" style="height:80px; width:80px; margin-top:10px" src="{{ base_url('media/photo_user/') }}@php echo $_SESSION['photo']; @endphp">
                        </a>
                        <div class="task-thumb-details">
                            <h1><a href="#">@php echo $_SESSION['nama'] @endphp</a></h1>
                            <p>@php echo $_SESSION['lev_user'] @endphp</p>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                            <tr>
                                <td>
                                    <i class=" fa fa-book"></i>
                                </td>
                                @if($_SESSION['lev_user']=='Administrator')
                                <td><a href="{{base_url('admin/profile.html')}}">Total Artikel</a></td>
                                @elseif($_SESSION['lev_user']=='Pengurus')
                                <td><a href="{{base_url('pengurus/profile.html')}}">Total Artikel</a></td>
                                @endif
                                <td> {{$jml_post}}</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <!--user info table end-->
            </div>
            <div class="col-lg-8">
                <!--work progress start-->
                <section class="card">
                    <div class="card-body progress-card">
                        <div class="task-progress">
                            <h1>Ranking Pengurus</h1>
                            <p>Rangking di hitung berdasarkan jumlah terbanyak posting artikel</p>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Nama</th>
                                <th>Jumlah Artikel</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rank as $row)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        {{ $row['nama'] }}
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-danger">{{ $row['jml'] }} Artikel</span>
                                    </td>
                                    <td>
                                        <div id="work-progress1"></div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
                <!--work progress end-->
            </div>
        </div>
    </section>
</section>
<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>
@endsection