@extends('frontend.layout.master')

@section('title', 'Toko - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Toko</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Toko</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<div class="content-section module products-page">
    <div class="row">
        
        <div class="medium-3 small-12 columns sidebar">
            
            <div class="widget search">
                <h2>Pencarian Produk</h2>
                <input type="text" placeholder="Cari Produk..." />
            </div><!-- widget ends -->                 
            
        </div><!-- Sidebar Ends /-->
        
        <div class="medium-9 small-12 columns">
            <!-- products container -->
            <div class="products-wrap">
                @foreach($product as $row)
                <div class="medium-4 small-12 columns">
                    <div class="single-product">
                        <div class="product-img thumbnail">
                            <a href="single-product.html">
                                <img alt=""  class="front-image" src="{{ base_url('media/product/').$row['foto'] }}">
                            </a>
                            <div class="add-to-cart-top">
                                @php
                                    $text = "Saya ingin membeli produk ".$row['nm_product']." apakah masih tersedia ?";
                                    $endcoded = str_replace(" ", "%20", $text);
                                    @endphp
                                    <a href='https://api.whatsapp.com/send?phone=82301117118&text={{$endcoded}}' target="_blank" class='button primary'>Beli Sekarang</a>
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
            <!-- products container End -->

            <div class="page-filter row">
                <?= $pagination ?>
            </div>

            <!-- row pagination -->
            
        </div><!-- Shop Content ends /-->
        
    </div><!-- Row Ends /-->
    
</div>
<!-- Content Section Ends /-->
@endsection