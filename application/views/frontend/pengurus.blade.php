@extends('frontend.layout.master')

@section('title', 'Daftar Pengurus - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Daftar Pengurus</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Pengurus</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Meet your Team Sect -->
<div class="module">
    <div class="row">
        @foreach($pengurus as $row)
        <div class="medium-4 small-12 columns" style="margin-bottom:20px">
            <div class="shadow">
                <div class="staff-box">
                    <a href="#"><img  alt="" src="{{base_url('media/pengurus/').$row['photo']}}" style="width:350px;height:300px" /></a>
                    </div><!-- staff box /-->       
                    <div class="staff-detail">
                    <h4><a href="#">{{ $row['nama'] }}</a><br><span>{{ $row['jabatan'] }}</span></h4>                                                                                
                    </div>                                                
            </div>                    
        </div><!-- Staff -->
        @endforeach
    </div><!-- Row -->
</div>
<!-- Meet your Team Ends -->
@endsection