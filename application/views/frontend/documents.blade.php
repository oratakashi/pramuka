@extends('frontend.layout.master')

@section('title', 'Download Berkas - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Download Berkas / Dokumen</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="#">Download</a></li>
                <li><span class="show-for-sr">Current: </span> Dokumen / Berkas</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content Area Starts -->
<div class="content-area module faq">
	    	<div class="row">
            
        		<div class="medium-9 small-12 columns">
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
                                </table>
                            </div>
                        </li>                     
                        @endforeach                  
                	</ul> <!-- reasons accordion ends -->
           		</div> <!-- right sidebar ends -->

           	    <div class="medium-3 small-12 columns sidebar">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                        </div><!-- icon side /-->
                        <div class="info-side float-left">
                            <p><strong>Keterangan : </strong><br>
                            <p>Total Ukuran : {{ $size }}</p>
                            <p>Jumlah Berkas : {{ count($dokumen) }} Berkas</p>
                        </div><!-- info side /-->
                        <div class="clearfix"></div>
                    </div><!-- icon-box /-->
            	</div><!-- icon-box ends -->
            
    	    </div><!-- row / -->
		</div> 	    	
        <!-- Content Area Ends /-->
@endsection