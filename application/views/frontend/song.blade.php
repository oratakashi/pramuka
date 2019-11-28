@extends('frontend.layout.master')

@section('title', 'Download Lagu Pramuka - Pramuka Lumajang Tangguh')

@section('container')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Download Lagu Pramuka</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="#">Download</a></li>
                <li><span class="show-for-sr">Current: </span> Lagu Pramuka</li>
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
                @foreach($song as $row)
                <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">{{ $row['nama_file'] }}</a>
                    <div class="accordion-content" data-tab-content>
                        <audio controls style="width:100%">
                            <source src="{{base_url('media/music/').$row['nama_file']}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <hr>
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
        </div> <!-- right sidebar ends -->

        <div class="medium-3 small-12 columns sidebar">
            <div class="icon-box">
                <div class="icon-side float-left">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                </div><!-- icon side /-->
                <div class="info-side float-left">
                    <p><strong>Keterangan : </strong><br>
                    <p>Total Ukuran : {{ $size }}</p>
                    <p>Jumlah Berkas : {{ count($song) }} Berkas</p>
                </div><!-- info side /-->
                <div class="clearfix"></div>
            </div><!-- icon-box /-->
        </div><!-- icon-box ends -->
    
    </div><!-- row / -->
</div> 	    	
<!-- Content Area Ends /-->
@endsection