

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

      input {
        margin-bottom: 10px;
      }

      .panel.col-md-4 {
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
            <li class="active"><a href="zuper-berita.php">Berita</a></li>
            <li><a href="zuper-partner.php">Partner</a></li>
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
        <form>
          <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Judul">
            <textarea></textarea>
          </div>
          <div class="panel panel-default col-md-4">
            <div class="panel-heading">
              <h3 class="panel-title">Tag</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6">
                  <div class="checkbox">
                    <label><input type="checkbox" value="">PCA</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">LCW</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">LDG</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">CSPC</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">LCT</label>
                  </div>
                </div>
                  <div class="col-xs-6">
                  <div class="checkbox">
                    <label><input type="checkbox" value="">SEMNAS</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">BBT</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Dinamik Star</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Donor Darah</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <a href="#" class="col-sm-12"><i class="glyphicon glyphicon-plus"></i> Tambah Kategori</a>
              </div>

              <hr/>

              <!-- penulis -->
              <input type="text" class="form-control" placeholder="Penulis">

              <hr/>

              <!-- publish -->
              <button type="submit" class="btn btn-primary">Publish</button>
              <button type="button" class="btn btn-default">Save Draft</button>
            </div>
          </div>
        </form>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
          selector: "textarea",
          plugins: [
              "advlist autolink lists link image charmap preview anchor",
              "searchreplace visualblocks code",
              "insertdatetime media table contextmenu paste"
          ],
          toolbar: "code | undo redo | styleselect | bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist indent outdent | link image",
          height: 300,
      });
    </script>
  </body>
</html>
