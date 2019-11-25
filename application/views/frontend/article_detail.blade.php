@extends('frontend.layout.master')

@section('title', $article['judul'].' - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>{{$article['judul']}}</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li> {{ $article['nm_kategori'] }}</li>
                <li><span class="show-for-sr">Current: </span> {{$article['judul']}}</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<div class="content-section module blog-page">
        	
    <div class="row">
        
        <div class="medium-9 small-12 columns posts-wrap">

            <div class="single-post">
                <div class="featured-image">
                    <a href="{{ base_url('media/article/').$article['foto_header'] }}" target="_blank">
                        <img alt="" src="{{ base_url('media/article/').$article['foto_header'] }}" style="width:900px;height:400px" class="thumbnail" />
                    </a>
                    <div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> {{date('d F Y', strtotime($article['tgl_post']))}} | <i class="fa fa-user" aria-hidden="true"></i> <a href="#">{{$article['nama']}}</a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="#">{{ $article['nm_kategori'] }}</a></div>
                    </div>
                
                <h3>{{ $article['judul'] }}</h3>
                
                <div  class="post-excerpt">
                    <?= $article['artikel'] ?>                    
                </div><!-- post excerpt ends /-->
                
                    <div class="sharing-posts">
                        <div class="medium-10 small-12 columns post-tags">
                        <ul class="tags">
                            <li><strong>Kategori:</strong></li>
                            <li><a href="#">{{ $article['nm_kategori'] }}</a></li>
                        </ul>
                        </div>   
                    
                        <div class="medium-2 small-12 columns">
                    </div><!-- share post ends /-->
                <div class="clearfix"></div>
                </div><!-- sharing row ends /-->
                    
            </div><!-- post ends here /-->
            
            <div class="author-box">
                <div class="medium-2 small-2 columns">
                    <a href="single-post.html#">
                        <img alt="" src="{{base_url('media/photo_user/').$article['photo']}}" />
                    </a>
                </div>
                <div class="medium-10 small-10 columns">
                    <p>
                        <strong>Penulis {{ $article['nama'] }}</strong></a><br> 
                        {{$article['lev_user']}}
                    </p>
                </div>
                <div class="clearfix"></div>
            </div><!-- author Box ends /-->
            
            <div id="fb-root"></div>
            <div class="fb-comments" data-href="{{ current_url() }}" data-width="850" data-numposts="10"></div>
            
        </div><!-- Posts wrap ends /-->
        
        <div class="medium-3 small-12 columns sidebar">
            <div class="widget">
                <h2>Kategori</h2>
                
                <ul class="menu vertical">
                    @foreach($kategori as $row)
                    <li><a href="single-post.html#">{{$row['nm_kategori']}}</a></li>
                    @endforeach
                </ul>
            </div><!-- widget ends /-->
            
            <div class="widget">
                <h2>Artikel terbaru</h2>
                    @foreach($list as $row)
                    <div class="popular-post">
                        <div class="row" style="padding-left:10px">
                            <div class="col-md-4">
                                <img alt="" src="{{ base_url('media/article/').$row['foto_header'] }}" style="width:64px;height:64px;margin:10px" class="float-left" />
                            </div>
                            <div class="col-md-8">
                            <a href="{{base_url().$row['id_artikel'].'/'.$row['slug']}}.html"><strong>{{ $row['judul'] }}</strong></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div><!-- widget ends /-->
            
        </div><!-- right bar ends here /-->
        
    </div><!-- Row Ends /-->
    
</div>
<!-- Content Section Ends /-->
@endsection