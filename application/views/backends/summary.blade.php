@extends('backend.layouts.master')

@section('title', 'Rekap Data - Pramuka Lumajang')

@section('container')
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#periode" role="tab" aria-controls="periode" aria-selected="true">Rekap Per Periode</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#bulan" role="tab" aria-controls="bulan" aria-selected="false">Rekap Per Bulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tahun" role="tab" aria-controls="tahun" aria-selected="false">Rekap Per Tahun</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false">Rekap Sepanjang masa</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @include('backend.summary.periode')
                            @include('backend.summary.bulan')
                            @include('backend.summary.tahun')
                            @include('backend.summary.all')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
      @include('backend.summary.periode_script')
      @include('backend.summary.bulan_script')
      @include('backend.summary.tahun_script')
@endsection