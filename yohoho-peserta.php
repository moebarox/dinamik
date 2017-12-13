

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Koor Acara &middot; Dinamik 9</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
      body {
        padding-top: 70px;
      }

      .panel {
        width: auto;
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
            <li><a href="yohoho-index.php">Home</a></li>
            <li class="active"><a href="yohoho-peserta.php">Peserta</a></li>
            <li><a href="yohoho-berita.php">Berita</a></li>
            <li><a href="yohoho-file.php">File</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="row">
      <div class="col-xs-8">
        <h1><strong>Berita</strong></h1>
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
    
    <p>Lunas <span class="badge">1</span> | Belum lunas <span class="badge">1</span></p>

    <hr/>

    <div class="table-responsive">

      <!-- kolom tabel disesuaikan dengan masing-masing lomba -->
      <table class="table table-hover table-bordered table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>Email</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telp</th>
            <th>Sekolah</th>
            <th>Alamat Sekolah</th>
            <th>Telp Sekolah</th>
            <th>Jenjang</th>
            <th>NIP Pembimbing</th>
            <th>Nama Pembimbing</th>
            <th>Telp Pembimbing</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="warning">
            <td>1</td>
            <td>hendra.arfiansyah@student.upi.edu</td>
            <td>1100705</td>
            <td>Hendra Arfiansyah</td>
            <td>Tasikmalaya</td>
            <td>1993-04-01</td>
            <td>085323008543</td>
            <td>SMAN 1 Cihaurbeuti</td>
            <td>Jl. Kartadinata no. 600</td>
            <td>-</td>
            <td>SMA</td>
            <td>-</td>
            <td>Tommy Soeharto</td>
            <td>14045</td>
            <td><button class="btn btn-primary btn-xs">Jadikan lunas</button><button class="btn btn-default btn-xs">Hapus</button></td>
          </tr>
          <tr class="success">
            <td>2</td>
            <td>hendra.arfiansyah@student.upi.edu</td>
            <td>1100705</td>
            <td>Hendra Arfiansyah</td>
            <td>Tasikmalaya</td>
            <td>1993-04-01</td>
            <td>085323008543</td>
            <td>SMAN 1 Cihaurbeuti</td>
            <td>Jl. Kartadinata no. 600</td>
            <td>-</td>
            <td>SMA</td>
            <td>-</td>
            <td>Tommy Soeharto</td>
            <td>14045</td>
            <td><button class="btn btn-default btn-xs disabled">Lunas</button><button class="btn btn-default btn-xs">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
