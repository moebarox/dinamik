

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dies Natalis Mahasiswa Ilmu Komputer Universitas Pendidikan Indonesia ke-9">
    <meta name="author" content="Hendra Arfiansyah">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Lomba &middot; Dinamik 9</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- Custom styles for this template -->
    <style type="text/css">
      
      #innerWrap {
        padding: 5px;
        width: 100%;
        background: url('assets/img/line-bg-light.png') repeat;
      }
      #innerWrap .jumbotron {
        padding: 0;
        margin-bottom: 5px;
        background-color: #fff;
      }

      /* tab konten */
      #myTab {
        padding: 10px 10px 0;
        border-radius: 4px 4px 0 0;
        background: url('assets/img/line-bg-light.png') repeat;
      }
      #myTab li:not(.active) a {
        background-color: #f48159;
        border: 1px solid #f05722;
        border-bottom: 0;
        color: #fff;
      }
      #myTab li:not(.active) a:hover {
        background-color: #f05722;
      }      

      #myTabContent {
        padding: 0 10px 10px;
        background: url('assets/img/line-bg-light.png') repeat;
      }
      #myTabContent .tab-pane {
        padding: 10px;
        background-color: #fff;
      }
      #myTabContent p {
        margin-bottom: 0;
        padding-bottom: 10px;
      }
      #myTabContent input {
        margin-bottom: 10px;
      }

      @media (min-width: 768px) {
        #myTab {
          width: 100%;
        }

        #myTab > li {
          text-align: center;
          width: 50%;
        }
      }

      @media (min-width: 992px) {
        
      }
      
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <ul class="affix" id="socmed">
      <li><a href="http://www.facebook.com/DinamikIlkomUPI" target="_blank" class="facebook" data-toggle="tooltip" data-placement="auto" title="Dinamik 9 on Facebook"></a></li>
      <li><a href="http://www.twitter.com/dinamikUPI" target="_blank" class="twitter" data-toggle="tooltip" data-placement="auto" title="Dinamik 9 on Twitter"></a></li>
      <li><a href="#" target="_blank" class="google-plus" data-toggle="tooltip" data-placement="auto" title="Dinamik 9 on Google+"></a></li>
    </ul>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="header">
      <ul id="scene" class="scene">
        <li class="layer" data-depth="0.10"><img src="assets/img/layer1.png"></li>
        <li class="layer" data-depth="0.20"><img src="assets/img/layer2.png"></li>
        <li class="layer" data-depth="0.40"><img src="assets/img/layer3.png"></li>
        <li class="layer" data-depth="0.60"><img src="assets/img/layer4.png"></li>
      </ul>
      <div class="ground"></div>
      <div class="banner"><img src="assets/img/banner.png"></div>
    </div>

    <!-- Navbar -->
    <div class="navbar navbar-default navbar-static-top affix-top" data-spy="affix" data-offset-top="400">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://dinamik.kemakom.org"><img src="assets/img/logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">BERANDA</a></li>
            <li class="active"><a href="lomba.php">LOMBA</a></li>
            <li><a href="event.php">EVENT</a></li>
            <li><a href="news.php">BERITA</a></li>
            <li><a href="download.php">DOWNLOAD</a></li>
            <li><a href="about.php">TENTANG</a></li>
          </ul>
          <form id="search-form" class="navbar-form navbar-right" action="cari.php" method="get">
            <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Pencarian">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div id="wrapper">
    <div class="container">

      <!-- jumbotron -->
      <div id="innerWrap">
        <div class="jumbotron">
          <img class="img-responsive" data-src="holder.js/1100x400/auto" alt="Lomba">
        </div>
        <ul class="nav nav-pills nav-justified">
          <li><a href="lomba-pca.php">PCA</a></li>
          <li><a href="lomba-lcw.php">LCW</a></li>
          <li><a href="lomba-ldg.php">LDG</a></li>
          <li><a href="lomba-cspc.php">CSPC</a></li>
          <li class="active"><a href="lomba-lct.php">LCT</a></li>
        </ul>
      </div>

      <hr/>

      <!-- tab lomba -->
      <div>
        <ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#deskripsi" data-toggle="tab">Deskripsi</a></li>
          <li class=""><a href="#pendaftaran" data-toggle="tab">Pendaftaran</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="deskripsi">
            <!-- dibuat dinamis berdasarkan parameter lomba nya -->
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel magna laoreet, mollis tortor sit amet, sollicitudin nisi. Phasellus gravida, nibh nec commodo pulvinar, nulla nunc pharetra tortor, eu tempus mi purus non dui. Quisque nec ultrices metus, eu placerat urna. Etiam rutrum felis quis sem hendrerit auctor. Pellentesque facilisis leo tellus, quis pellentesque mauris tempor vitae. Sed vitae purus sit amet nisl pretium eleifend et vel nibh. Aliquam pharetra ultrices risus non imperdiet. Fusce sed est ante. Suspendisse elementum dui vel diam dictum consectetur. Quisque ultricies tellus massa, eget fermentum magna porttitor lobortis. In id porta enim. Integer ut luctus lacus, nec semper dui. Proin quis dignissim lorem, in luctus mauris. In accumsan vestibulum neque.
              <br/>
              <br/>
              Quisque a vulputate felis, sed luctus orci. Morbi ornare dignissim felis eget congue. Ut aliquet elementum nibh sit amet imperdiet. Nulla sed sagittis diam, id rhoncus orci. Fusce tristique, orci nec volutpat lacinia, libero elit dapibus ipsum, sed porta velit velit eget odio. Phasellus quis pulvinar tellus, in tincidunt ligula. Mauris nunc elit, blandit id porta vitae, feugiat sit amet nisi. Quisque ac ipsum rutrum, facilisis dolor sed, lacinia dui. Nunc fermentum quam ut vulputate sagittis. Nulla lobortis ligula quis nibh aliquet posuere. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
              <br/>
              <br/>
              Phasellus metus lorem, placerat ut mi ut, auctor dapibus neque. Aliquam erat volutpat. Quisque et ante lectus. Donec rhoncus dictum massa at porttitor. Nulla facilisi. Nulla eros orci, faucibus nec tempor in, sodales sit amet tortor. Sed bibendum odio ut enim fringilla, non scelerisque turpis condimentum. Quisque facilisis eleifend ipsum eget ultrices. Proin eu tincidunt eros. Suspendisse varius placerat diam in ornare. Proin vulputate cursus diam, id posuere risus suscipit ut. Praesent vulputate quam ut diam malesuada, id commodo nibh varius.
            </p>
          </div>
          <div class="tab-pane fade" id="pendaftaran">

            <form role="form">
              <div class="row">
                <div class="col-md-4">
                  <legend>Tim</legend>
                  <div class="form-group">
                    <label for="inputPassword1">Nama Tim</label>
                    <input type="text" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1">Email</label>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-4">
                  <legend>Biodata</legend>
                  <div class="form-group">
                    <label for="inputPassword1">Anggota 1</label>
                    <input type="text" class="form-control" placeholder="NIS">
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                    <input type="text" class="form-control" placeholder="Kontak">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1">Anggota 2</label>
                    <input type="text" class="form-control" placeholder="NIS">
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                    <input type="text" class="form-control" placeholder="Kontak">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1">Anggota 3</label>
                    <input type="text" class="form-control" placeholder="NIS">
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                    <input type="text" class="form-control" placeholder="Kontak">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1">Anggota 4</label>
                    <input type="text" class="form-control" placeholder="NIS">
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                    <input type="text" class="form-control" placeholder="Kontak">
                  </div>
                </div>
                <div class="col-md-4">
                  <legend>Sekolah</legend>
                  <div class="form-group">
                    <label for="inputEmail1">Asal Sekolah</label>
                    <input type="text" class="form-control" placeholder="Asal Sekolah">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1">Alamat Sekolah</label>
                    <input type="text" class="form-control" placeholder="Alamat Sekolah">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1">No Telp Sekolah</label>
                    <input type="text" class="form-control" placeholder="No Telp Sekolah">
                  </div>
                  <legend>Pembimbing</legend>
                  <div class="form-group">
                    <label for="inputEmail1">NIP Pembimbing</label>
                    <input type="text" class="form-control" placeholder="NIP Pembimbing">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1">Nama Pembimbing</label>
                    <input type="text" class="form-control" placeholder="Nama Pembimbing">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1">No Telp Pembimbing</label>
                    <input type="text" class="form-control" placeholder="No Telp Pembimbing">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Saya yakin dan menerima seluruh ketentuan yang berlaku
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10">
                      <button type="submit" class="btn btn-default btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div> <!-- /row -->
            </form>

          </div>
        </div>
      </div>

    </div> <!-- /container -->

    <!-- media partner -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Sponsor</h3>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="sponsor">
          </div>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="sponsor">
          </div>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="sponsor">
          </div>
        </div>
        <div class="col-md-6">
          <h3>Media Partner</h3>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="media partner">
          </div>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="media partner">
          </div>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="media partner">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /wrapper -->


  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Kontak</h2>
          <p>
            Dinamik9 : 3G for our technology<br/>
            Jl. Setiabudi No. 229 Bandung, Jawa Barat, Indonesia.<br/>
            Telp : Muhammad Panji (081809038776)<br/>
            Email : <a href="mailto:dinamik@kemakom.org">dinamik@kemakom.org</a><br/>
          </p>
        </div>
        <div class="col-md-4">
          <h2>Download</h2>
          <div class="list-group">
            <a href="#" class="list-group-item">kenikmatan_paha_mulus_ayam_kremes.3gp</a>
            <a href="#" class="list-group-item">hot_siswi_sma_makan_baso_kepedesan.3gp</a>
            <a href="#" class="list-group-item">adegan_panas_siswi_sma_upacara_bendera.3gp</a>
            <a href="#" class="list-group-item">tante_suka_daun_singkong.3gp</a>
            <a href="#" class="list-group-item">nikmatnya_ulekan_sambel_bi_ijah.3gp</a>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Organized by</h2>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="organized">
          </div>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="organized">
          </div>
          <div class="col-xs-4 col-md-4">
            <img class="img-responsive" src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="organized">
          </div>
        </div>
      </div>
      <hr>
      <div class="row-fluid">
        <div class="col-md-12">
          <div class="col-md-8">
            Dinamik9 was developed by <a href="developer.php">Developer Team</a> &middot; Build with <a href="http://getbootstrap.com">Bootstrap</a>
          </div>
          <div class="col-md-4">
            <p class="muted pull-right">© 2013 Dinamik 9. All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /footer -->

  <p id="jumptotop" data-toggle="tooltip" title="Gulir ke atas">
    <a href="#top"><img src="assets/img/top.png"></a>
  </p>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="assets/js/jquery.parallax.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        // parallax header
        $('#scene').parallax({
          frictionY: 0
        });

        // tooltip socmed
        $("[data-toggle='tooltip']").hover(function(){
          $(this).tooltip('toggle');
        });
  
        // fade in #jumptotop
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
              $('#jumptotop').fadeIn();
            }else{
              $('#jumptotop').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#jumptotop a').click(function () {
            $('body,html').animate({scrollTop: 0}, 'slow');
            return false;
          });
        });
        
      });
    </script>
  </body>
</html>
