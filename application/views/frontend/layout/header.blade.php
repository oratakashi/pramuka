<div class="header">
    <div class="row">
        <div class="medium-4 small-12 columns">
            <div class="logo">
                <a href="{{ base_url('index.html') }}">
                    <img src="{{base_url('assets/frontend/')}}images/LOGO-WEB-.png" alt="Webful Education" />
                </a>    
            </div><!-- logo /-->
        </div><!-- left Ends /-->
        
        <div class="medium-8 small-12 columns nav-wrap">
            <!-- navigation Code STarts here.. -->
            <div class="top-bar">
                <div class="top-bar-title">
                    <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                        <a data-toggle><span class="menu-icon dark float-left"></span></a>
                    </span>
                </div>
                
                <nav id="responsive-menu">
                    <ul class="menu vertical medium-horizontal float-right" data-responsive-menu="accordion medium-dropdown">
                        <li><a href="{{ base_url('index.html') }}">Beranda</a>
                        </li>
                        <li class="single-sub parent-nav"><a href="#"> Kategori </a>
                            <ul class="child-nav menu vertical">
                                @foreach($kategori as $row)
                                    <li><a href="{{ base_url('categories/').$row['slug'] }}">{{ $row['nm_kategori'] }}</a></li>                                       
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ base_url('stores.html') }}">Toko</a>
                        </li>
                            <li class="single-sub parent-nav"><a href="#"> Download</a>
                            <ul class="child-nav menu vertical">
                                <li><a href="{{ base_url('documents.html') }}">Berkas / Dokumen</a></li>
                                <li><a href="{{ base_url('song.html') }}">Lagu Pramuka</a></li>                                        
                            </ul>
                        </li>
                        <li><a href="{{ base_url('kwaran.html') }}">Kwaran</a></li>
                        <li><a href="{{ base_url('pengurus.html') }}">Pengurus</a></li>
                        <li><a href="https://www.sipapramukajatim.or.id/">SIPA</a></li>
                        <li><a href="{{ base_url('pengurus') }}">Login</a></li>
                    </ul>
                </nav>
            </div><!-- top-bar Ends -->
            <!-- Navigation Code Ends here -->
            <div class="search-wrap float-right">
                <a href="index.html#" class="search-icon-toggle" data-toggle="search-dropdown"><i class="fa fa-search"></i></a>
            </div><!-- search wrap ends -->
            <div class="dropdown-pane" id="search-dropdown" data-dropdown data-auto-focus="true">
                <input type="text" placeholder="Enter keyword and press enter .... " />
            </div>
        </div><!-- right Ends /-->
        
    </div><!-- Row Ends /-->
</div>