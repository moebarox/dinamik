

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
            <li class="active"><a href="zuper-partner.php">Partner</a></li>
            <li><a href="zuper-file.php">File</a></li>
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
          <h1><strong>Partner</strong> <a data-toggle="modal" href="#myModal" class="btn btn-default btn-sm">Tambah partner</a></h1>
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

      <div class="panel panel-default">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Logo</th>
                  <th>Nama</th>
                  <th>Link</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><img src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="Generic placeholder image"></td>
                  <td>Universitas Pendidikan Indonesia</td>
                  <td><a href="http://upi.edu">http://upi.edu</a></td>
                  <td>Organized</td>
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
                  <td><img src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="Generic placeholder image"></td>
                  <td>KEMAKOM</td>
                  <td><a href="http://kemakom.org">http://kemakom.org</a></td>
                  <td>Organized</td>
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
                  <td><img src="data:image/png;base64," data-src="holder.js/300x200/auto" alt="Generic placeholder image"></td>
                  <td>ClubInk</td>
                  <td><a href="http://clubink.kemakom.org">http://clubink.kemakom.org</a></td>
                  <td>Supported</td>
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
                  <td><img src="data:image/png;base64," data-src="holder.js/300x300/auto" alt="Generic placeholder image"></td>
                  <td>OSTRIC</td>
                  <td><a href="http://ostric.kemakom.org">http://ostric.kemakom.org</a></td>
                  <td>Supported</td>
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
                  <td><img src="data:image/png;base64," data-src="holder.js/300x130/auto" alt="Generic placeholder image"></td>
                  <td>Google</td>
                  <td><a href="http://google.com">http://google.com</a></td>
                  <td>Sponsor</td>
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

    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tambah Partner</h4>
          </div>
          <div class="modal-body">
            <form role="form" id="formPartnerNew">
              <div class="form-group">
                <label>Nama</label>
                <input type="email" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <label>Link</label>
                <input type="url" class="form-control" placeholder="Link">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control">
                  <option>Organized</option>
                  <option>Supported</option>
                  <option>Sponsor</option>
                  <option>Media Partner</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File gambar</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Max filesize: 1 MB</p>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="formPartnerNew">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>

  </body>
</html>
