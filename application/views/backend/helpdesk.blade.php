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
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="periode" aria-selected="true">Pertanyaan Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="bulan" aria-selected="false">Hubungi Pengembang</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @include('backend.helpdesk.faq')
                            @include('backend.helpdesk.contact')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection