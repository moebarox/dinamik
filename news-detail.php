<?php
  if(isset($_GET['lomba']))
    $lomba = $_GET['lomba'];
  else
    $lomba = 'pca';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dies Natalis Mahasiswa Ilmu Komputer Universitas Pendidikan Indonesia ke-9">
    <meta name="author" content="Hendra Arfiansyah">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Berita &middot; Dinamik 9</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- Custom styles for this template -->
    <style type="text/css">

      @media (min-width: 768px) {
        
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
            <li><a href="lomba.php">LOMBA</a></li>
            <li><a href="event.php">EVENT</a></li>
            <li class="active"><a href="news.php">BERITA</a></li>
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

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1><strong>Lorem ipsum dolor sit amet</strong></h1>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <a href="#" class="thumbnail">
                <img src="data:image/png;base64," data-src="holder.js/1100x500/auto" alt="Generic placeholder image">
              </a>
            </div>
            <div class="col-md-12">
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
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>
                <i class="glyphicon glyphicon-user"></i> by <a href="#">John</a> 
                | <i class="glyphicon glyphicon-calendar"></i> Sept 16th, 2012
                | <i class="glyphicon glyphicon-comment"></i> <a href="#">3 Comments</a>
                | <i class="glyphicon glyphicon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a> 
                <a href="#"><span class="label label-info">Bootstrap</span></a> 
                <a href="#"><span class="label label-info">UI</span></a> 
                <a href="#"><span class="label label-info">growth</span></a>
              </p>

              <ul class="pager">
                <li class="previous"><a href="#">&larr; Berita sebelumnya</a></li>
                <li class="next"><a href="#">Berita selanjutnya &rarr;</a></li>
              </ul>

            </div>
          </div>

          <hr>

          <!-- komentar ini bisa diganti sama komentar facebook biar lebih familiar -->
          <div class="row">
            <div class="col-md-12">
              <h4>Komentar</h4>
            </div>
            <div class="col-md-8">
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Komentar</label>
                  <div class="col-lg-10">
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-8">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64," style="width: 64px; height: 64px;">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Ucup</h4>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64," style="width: 64px; height: 64px;">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Susan</h4>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
            </div>
          </div> <!-- /row -->

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
