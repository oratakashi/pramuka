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
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#slider" role="tab" aria-controls="periode" aria-selected="true">Kelola Slider</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#visi" role="tab" aria-controls="bulan" aria-selected="false">Kelola Visi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#misi" role="tab" aria-controls="tahun" aria-selected="false">Kelola Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="all" aria-selected="false">Kelola Deskripsi Website</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @include('backend.information.slider')
                            @include('backend.information.visi')
                            @include('backend.information.misi')
                            @include('backend.information.deskripsi')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection