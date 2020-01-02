@extends('frontend.layout.master')

@section('title', 'Kedai - Pramuka Lumajang Tangguh')

@php
    $text = "Saya ingin membeli produk ".$product['nm_product']." apakah masih tersedia ?";
    $endcoded = str_replace(" ", "%20", $text);
@endphp
@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>{{ $product['nm_product'] }}</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li> Kedai</li>
                <li><span class="show-for-sr">Current: </span> Detail</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<div class="content-section module single-products-page products-page">
    <div class="row">
        
        <div class="medium-12 small-12 columns">
            
            <div class="medium-5 small-12 columns product-thumbnail">
                <img alt="" src="{{ base_url('media/product/').$product['foto'] }}" class="thumbnail" />
            </div><!-- Product Image Ends -->
            
            <div class="medium-7 small-12 columns product-detail">

                <h2>{{ $product['nm_product'] }}</h2>

                <div class="product-meta">
                    ID Product: {{$product['id_product']}}
                </div><!-- Product Meta -->
                
                <p>{{ $product['deskripsi'] }}</p>
                
                <div class="price">
                    <span class="normal">{{"Rp " . number_format($product['harga'],2,',','.')}}</span>
                </div>
                
                <div class="add-cart-option">
                    <a href="https://api.whatsapp.com/send?phone=6285236464170&text={{$endcoded}}" class="button primary" target="_blank">Beli Sekarang</a> 
                </div><!-- add cart option -->
            
            </div><!-- Product Detail Ends -->
            
        </div> <!-- Product Area Ends /-->
        
    </div><!-- Row Ends /-->
</div>
<!-- Content Section Ends /-->

<!-- Related Products -->
<div class="our-store grey-bg">
    <div class="row">
        <div class="section-title-wrapper">
            <div class="section-title">
                <h2>Rekomendasi Produk</h2>
                <p></p>
            </div>
        </div><!-- title ends -->
        
        <div class="products-wrap">
            @foreach($data_product as $row)
            @php
                $text = "Saya ingin membeli produk ".$row['nm_product']." apakah masih tersedia ?";
                $endcoded = str_replace(" ", "%20", $text);
            @endphp
            <div class="medium-3 small-12 columns">
                <div class="single-product">
                    <div class="product-img thumbnail">
                        <a href="single-product.html">
                            <img alt=""  class="front-image" src="{{base_url('media/product/').$row['foto']}}">
                        </a>
                        <div class="add-to-cart-top">
                                <a href="https://api.whatsapp.com/send?phone=6285236464170&text={{$endcoded}}" class="button primary">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6><a href="{{ base_url('stores/').$row['id_product'].'/'.$row['slug'] }}.html">{{ $row['nm_product'] }}</a></h6>
                        <div class="price">
                            <span class="normal">{{"Rp " . number_format($row['harga'],2,',','.')}}</span>
                        </div>
                    </div>
                </div>
            </div><!-- product Ends here -->
            @endforeach
        </div><!-- products wrap -->
        
    </div><!-- Row Ends -->
</div>
<!-- Related Products Ends /-->
@endsection