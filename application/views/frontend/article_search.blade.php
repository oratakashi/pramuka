@extends('frontend.layout.master')

@section('title', 'Pencarian Artikel - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Pencarian Artikel</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li>Artikel</li>
                <li><span class="show-for-sr">Current: </span> Pencarian</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<!-- Content section -->
<div class="content-section module blog-page">
        	
    <div class="row">
        
        <div class="medium-9 small-12 columns posts-wrap">
            @foreach($article as $row)
            <div class="blog-post">
                <div class="featured-image">
                    <a href="{{base_url().'/'.$row['id_artikel'].'/'.$row['slug']}}.html">
                        <img alt="" src="{{ base_url('media/article/').$row['foto_header'] }}" style="width:900px;height:350px" class="thumbnail" />
                    </a>
                    <div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> {{date('d F Y', strtotime($row['tgl_post']))}} | <i class="fa fa-user" aria-hidden="true"></i> <a href="#">{{$row['nama']}}</a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="#">{{ $row['nm_kategori'] }}</a></div>
                </div>
                
                <h3><a href="{{base_url().'/'.$row['id_artikel'].'/'.$row['slug']}}.html">{{$row['judul'] }}</a></h3>
            </div><!-- post Ends here /-->
            @endforeach
            <div class="page-filter row">
                <?= $pagination ?>
            </div>
            
        </div><!-- Posts wrap /-->
        
        <div class="medium-3 small-12 columns sidebar">
            <div class="widget search">
                <h2>Pencarian Artikel</h2>
                <form action="{{base_url('article/search.aspx')}}" method="post">
                    <input name="keyword" type="text" placeholder="Cari Artikel..." />
                </form>
            </div><!-- widget ends -->  
            <div class="widget">
                <h2>Kategori</h2>
                
                <ul class="menu vertical">
                    @foreach($kategori as $row)
                    <li><a href="blog1.html#">{{$row['nm_kategori']}}</a></li>
                    @endforeach
                </ul>
            </div><!-- widget ends /-->
            
        </div><!-- right bar ends here /-->
        
    </div><!-- Row Ends /-->
    
</div>
<!-- Content Section Ends /-->
<!-- Content Section Ends /-->
@endsection