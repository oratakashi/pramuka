@extends('frontend.layout.master')

@section('title', 'Kwaran - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Daftar Kwaran</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Kwaran</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content Area Starts -->
<div class="content-area module faq">
    <div class="row">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Kwaran</th>
                <th>Gugusdepan</th>
                <th>Anggota</th>
            </tr>
            @foreach($kwaran as $row)
                <tr>
                    <td>{{ $row['id_kecamatan'] }}</td>
                    <td>{{ $row['nama_kecamatan'] }}</td>
                    <td>{{ $row['gugusdepan'] }}</td>
                    <td>{{ $row['anggota'] }}</td>
                </tr>
            @endforeach
        </table>    
    </div><!-- row / -->
</div> 	    	
<!-- Content Area Ends /-->
@endsection