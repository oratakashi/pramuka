@extends('frontend.layout.master')

@section('title', 'Beranda - Pramuka Lumajang Tangguh')

@section('container')
<!-- Banner Starts -->
@if(count($slider)!=0)
<div class="main-banner">
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
            <ul>	<!-- SLIDE  -->
                @foreach($slider as $row)
                <li data-index="rs-{{$loop->index}}" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="{{base_url('media/slider/').$row['image']}}"  alt="First Slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" />
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0" 
                            id="slide-16-layer-3" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                
                            data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="s:300;s:300;" 
                        data-start="1000" 
                        data-basealign="slide" 
                        data-responsive_offset="on"> 
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0" 
                            id="slide-16-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" 
                            data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['721','721','721','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;" 
                            data-mask_in="x:0px;y:0px;" 
                            data-mask_out="x:0;y:0;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">{{ $row['title'] }}
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer"></div>	
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div>
@endif
<!-- Banner Ends /-->

<!-- Visi Misi -->
<div class="faq module" style="margin-top:80px">
    <div class="section-title-wrapper">
        <div class="section-title">
            <h2>Visi & Misi</h2>
            <p>Berikut Visi dan Misi Kami</p>
        </div>
    </div> <!-- Title Ends /-->
    <div class="row">
        <div class="columns medium-6 pull-left">
            <h6>Visi</h6> 
            <ul class="accordion" data-accordion>
            @foreach($visi as $row)
                <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">{{$row['judul_visi']}}</a>
                    <div class="accordion-content" data-tab-content>
                        <?= $row['isi_visi'] ?>
                    </div>
                </li>            
            @endforeach
            </ul> <!-- reasons accordion ends -->
        </div>
        <div class="columns medium-6">
            <h6>Misi</h6>  
            <ul class="accordion" data-accordion>
            @foreach($misi as $row)
                <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">{{$row['judul_misi']}}</a>
                    <div class="accordion-content" data-tab-content>
                        <?= $row['isi_misi'] ?>
                    </div>
                </li>            
            @endforeach
            </ul> <!-- reasons accordion ends -->
        </div>
    </div>
</div>

<!-- Blog Posts -->
<div class="blog-posts module grey-bg">
    <div class="section-title-wrapper">
        <div class="section-title">
            <h2>Berita Terbaru</h2>
            <p></p>
        </div>
    </div> <!-- Title Ends /-->
    
    <div class="row">
        
        <div class="posts-wrapper">
            
            @foreach($article as $row)
                <div class="medium-4 small-12 columns" style="margin-bottom:20px">
                    <div class="post">
                        <div class="post-thumb">
                            <a href="{{ base_url('').$row['id_artikel'].'/'.$row['slug'] }}.html">
                                <img src="{{base_url('media/article/').$row['foto_header']}}" alt="photo" style="width:500px;height:230px" />
                            </a>    
                        </div><!-- Thumb /-->
                        <div class="post-content">
                            <h4><a href="{{ base_url('').$row['id_artikel'].'/'.$row['slug'] }}.html">
                                @php
                                    if(strlen($row['judul'])>40){
                                        echo substr(strtoupper($row['judul']), 0, 40)."...";
                                    }else{
                                        echo strtoupper($row['judul']);
                                    }
                                @endphp
                            </a></h4>
                            <div class="post-meta">{{date('d F Y', strtotime($row['tgl_post']))}} | <a href="{{base_url('categories/').$row['slug_kategori']}}">{{ $row['nm_kategori'] }}</a> | <strong>Penulis:</strong> {{ $row['nama'] }}</div>
                            <a href="{{ base_url('').$row['id_artikel'].'/'.$row['slug'] }}.html" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div><!-- post content /-->
                    </div><!-- Post /-->
                </div><!-- Post column /-->
            @endforeach
        </div><!-- Posts Wrapper /-->
        
        
    </div><!-- Row Ends /-->
    <div class="row">
        <div class="load-more text-center">
            <a href="{{base_url('article.html')}}" class="button primary bordered-dark">Lihat lainnya</a>
        </div><!-- Load more /-->
    </div>

</div>
<!-- Blog Posts Ends /-->


<!-- Instagram -->
<div class="gallery-wrapper module grey-bg">
    <div class="section-title-wrapper">
        <div class="section-title">
            <h2>Instagram Kami</h2>
            <p>Followers : {{$profile_ig['counts']['followed_by']}}</p>
        </div>
    </div> <!-- Title Ends /-->
    @if(!empty($instagram))
    <div class="gallery-container">
        @foreach($instagram as $row)
        <a href="{{$row['link']}}" target="_blank">
            <img class="gallery-thumb" src="{{$row['images']['standard_resolution']['url']}}" alt="" style="width:500px;height:267px"/>
        </a>
        @endforeach
    </div><!-- Gallery Container /-->
    @else
    <div class="gallery-container">
        <center><p>Gagal mengambil data dari Instagram</p></center>
    </div><!-- Gallery Container /-->
    @endif
</div>

<!-- Our Teachers -->
<div class="our-teachers module">
    <div class="row">
        <div class="section-title-wrapper">
            <div class="section-title">
                <h2>Pengurus</h2>
                <p>Daftar Pengurus di Kwartir Cabang Lumajang</p>
            </div>
        </div> <!-- Title Ends /-->
        
        <div class="teachers-wrapper">
            @foreach($pengurus as $row)
            <div class="teacher">
                <div class="teacher-thumb">
                    <img src="{{base_url('media/pengurus/').$row['photo']}}" alt="photo" style="height:280px;width:280px"/>
                </div><!-- Teacher thumb /-->
                <div class="teacher-meta">
                    <h3><a href="#">
                        @php
                            if(strlen($row['nama'])>18){
                                echo substr($row['nama'], 0, 15)."...";
                            }else{
                                echo $row['nama'];
                            }
                        @endphp
                    </a></h3>
                    <p>{{ $row['jabatan'] }}</p>
                </div><!-- teacher meta /-->    
            </div><!-- Teacher Ends /-->
            @endforeach
        </div><!-- Teachers Wrapper /-->
        
    </div><!-- row /-->
</div>
<!-- Our Teachers /-->
@endsection