

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Super Admin &middot; Dinamik 9</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
      body {
        padding-top: 70px;
      }

      .panel {
        padding: 0;
      }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="zuper-admin.php">Home</a></li>
            <li><a href="zuper-berita.php">Berita</a></li>
            <li><a href="zuper-partner.php">Partner</a></li>
            <li class="active"><a href="zuper-file.php">File</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peserta <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Lomba</li>
                <li><a href="#">PCA</a></li>
                <li><a href="#">LCW</a></li>
                <li><a href="#">LDG</a></li>
                <li><a href="#">CSPC</a></li>
                <li><a href="#">LCT</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Event</li>
                <li><a href="#">SEMNAS</a></li>
                <li><a href="#">BBT</a></li>
                <li><a href="#">DINAMIK STAR</a></li>
                <li><a href="#">DONOR DARAH</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-xs-8">
          <h1><strong>Partner</strong></h1>
        </div>
        <div class="col-xs-4">
          <form id="search-form" class="navbar-form navbar-right" action="cari.php" method="get">
            <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Pencarian">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
          </form>
        </div>
      </div>

      <hr/>

      <div class="panel panel-default col-md-8">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama File</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>kenikmatan_paha_mulus_ayam_kremes.3gp</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                        Aksi <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>hot_siswi_sma_makan_baso_kepedesan.3gp</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                        Aksi <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>adegan_panas_siswi_sma_upacara_bendera.3gp</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                        Aksi <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>tante_suka_daun_singkong.3gp</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                        Aksi <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>nikmatnya_ulekan_sambel_bi_ijah.3gp</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                        Aksi <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

          <p><i class="glyphicon glyphicon-trash"></i> <a href="#">Hapus</a></p>
          
          </div>

          <ul class="pagination text-center">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>

        </div>
      </div>

      <div class="panel panel-default col-md-4">
        <div class="panel-heading">
          <h3 class="panel-title">Upload File</h3>
        </div>
        <div class="panel-body">
          <form role="form" id="formPartnerNew">
            <div class="form-group">
              <label>Nama file</label>
              <input type="email" class="form-control" placeholder="Nama file">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Max filesize: 10 MB</p>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>

  </body>
</html>
