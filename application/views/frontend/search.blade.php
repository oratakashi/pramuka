@extends('frontend.layout.master')

@section('title', 'Pencarian - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Pencarian</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Pencarian Global</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<div class="content-area module faq">
    <!-- Artikel -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Artikel</h3>
            @if(count($article)==0)
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            @else
                @foreach($article as $row)
                <div class="medium-4 small-12 columns" style="margin-bottom:20px">
                    <div class="post">
                        <div class="post-thumb">
                            <a href="{{ base_url('').$row['id_artikel'].'/'.$row['slug'] }}.html">
                                <img src="{{base_url('media/article/').$row['foto_header']}}" alt="photo" style="width:500px;height:230px" />
                            </a>    
                        </div><!-- Thumb /-->
                        <div class="post-content">
                            <h4><a href="{{ base_url('').$row['id_artikel'].'/'.$row['slug'] }}.html">{{ $row['judul'] }}</a></h4>
                            <div class="post-meta">{{date('d F Y', strtotime($row['tgl_post']))}} | <a href="{{base_url('categories/').$row['slug_kategori']}}">{{ $row['nm_kategori'] }}</a> | <strong>Penulis:</strong> {{ $row['nama'] }}</div>
                            <a href="{{ base_url('').$row['id_artikel'].'/'.$row['slug'] }}.html" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div><!-- post content /-->
                    </div><!-- Post /-->
                </div><!-- Post column /-->
                @endforeach
            @endif
        </div>
    </div>
    <hr>
    <!-- Pengurus -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Pengurus</h3>
            @if(count($pengurus)==0)
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            @else
                <div class="teachers-wrapper">
                    @foreach($pengurus as $row)
                        <div class="teacher">
                            <div class="teacher-thumb">
                                <img src="{{base_url('media/pengurus/').$row['photo']}}" alt="photo" style="height:250px"/>
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
            @endif
        </div>
    </div>
    <hr>
    <!-- Dokumen -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Dokumen / Berkas</h3>
            @if(count($dokumen)==0)
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            @else  
                <ul class="accordion" data-accordion>
                    @foreach($dokumen as $row)
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">{{ $row['nama_file'] }}</a>
                        <div class="accordion-content" data-tab-content>
                            <table>
                                <tr>
                                    <th>Nama File</th>
                                    <th>Pengunggah</th>
                                    <th>Jumlah Download</th>
                                    <th>Ukuran</th>
                                    <th>Download</th>
                                </tr>
                                <tr>
                                    <td>
                                        @php
                                            if(strlen($row['nama_file'])>43){
                                                echo substr($row['nama_file'], 0, 40)."...";
                                            }else{
                                                echo $row['nama_file'];
                                            }
                                        @endphp
                                    </td>
                                    <td>{{ $row['nama'] }}</td>
                                    <td>{{ $row['total_download'] }}</td>
                                    <td>
                                        @php
                                            $real_size = $row['size'] / 1024;
                                            $real_size = round($real_size, 2);
                                            $ext = "";
                                            if($real_size < 1){
                                                $real_size = $row['size'];
                                                $ext = "Kb";
                                            }elseif($real_size < 1024){
                                                $ext = "Mb";
                                            }elseif($real_size < 1048576){
                                                $ext = "Gb";
                                            }else{
                                                $ext = "Tb";
                                            }
                                            echo $real_size.$ext;
                                        @endphp
                                    </td>
                                    <td>
                                        <a href="{{base_url('documents/').$row['id_dokumen'].'/'.$row['nama_file']}}" class="btn btn-primary" target="_blank"><i class="fa fa-download"></i> Download</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>                     
                    @endforeach                  
                </ul>
            @endif            
        </div>           
    </div>
    <hr>
    <!-- Song -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Lagu Pramuka</h3>
            @if(count($song)==0)
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            @else
                <ul class="accordion" data-accordion>
                    @foreach($song as $row)
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">{{ $row['nama_file'] }}</a>
                        <div class="accordion-content" data-tab-content>
                            <table>
                                <tr>
                                    <th>Nama File</th>
                                    <th>Pengunggah</th>
                                    <th>Jumlah Download</th>
                                    <th>Ukuran</th>
                                    <th>Download</th>
                                </tr>
                                <tr>
                                    <td>
                                        @php
                                            if(strlen($row['nama_file'])>43){
                                                echo substr($row['nama_file'], 0, 40)."...";
                                            }else{
                                                echo $row['nama_file'];
                                            }
                                        @endphp
                                    </td>
                                    <td>{{ $row['nama'] }}</td>
                                    <td>{{ $row['total_download'] }}</td>
                                    <td>
                                        @php
                                            $real_size = $row['size'] / 1024;
                                            $real_size = round($real_size, 2);
                                            $ext = "";
                                            if($real_size < 1){
                                                $real_size = $row['size'];
                                                $ext = "Kb";
                                            }elseif($real_size < 1024){
                                                $ext = "Mb";
                                            }elseif($real_size < 1048576){
                                                $ext = "Gb";
                                            }else{
                                                $ext = "Tb";
                                            }
                                            echo $real_size.$ext;
                                        @endphp
                                    </td>
                                    <td>
                                        <a href="{{base_url('song/').$row['id_lagu'].'/'.$row['nama_file']}}" class="btn btn-primary" target="_blank"><i class="fa fa-download"></i> Download</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>                     
                    @endforeach                  
                </ul> <!-- reasons accordion ends -->
            @endif
        </div> <!-- right sidebar ends -->
    </div>
    <hr>
    <!-- Product -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Product</h3>
            @if(count($product)==0)
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            @else
                <div class="products-wrap">
                    @foreach($product as $row)
                        <div class="medium-4 small-12 columns">
                            <div class="single-product">
                                @php
                                    $text = "Saya ingin membeli produk ".$row['nm_product']." apakah masih tersedia ?";
                                    $endcoded = str_replace(" ", "%20", $text);
                                @endphp
                                <div class="product-img thumbnail">
                                    <a href="{{ base_url('stores/').$row['id_product'].'/'.$row['slug'] }}.html">
                                        <img alt=""  class="front-image" src="{{ base_url('media/product/').$row['foto'] }}">
                                    </a>
                                    <div class="add-to-cart-top">
                                            <a href='https://api.whatsapp.com/send?phone=6282301117118&text={{$endcoded}}' target="_blank" class='button primary'>Beli Sekarang</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h6><a href="#">{{ $row['nm_product'] }}</a></h6>
                                    <div class="price">
                                        <span class="normal">{{"Rp " . number_format($row['harga'],2,',','.')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- product Ends here /-->
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            @endif
        </div>
    </div>
    <hr>
    <!-- Kwaran -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Kwaran</h3>
            @if(count($kwaran)==0)
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            @else
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
            @endif
        </div>
    </div>
</div>
@endsection