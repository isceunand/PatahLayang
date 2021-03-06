<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Register Peserta Donor Darah</title>
  <!-- Favicon -->
  <link href="<?= base_url(); ?>assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= base_url(); ?>assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= base_url(); ?>assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <h3 class="text-light">Patah Layang</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?= base_url(); ?>">
                  PATAHLAYANG
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?= base_url(); ?>panitia/register">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?= base_url(); ?>panitia/login">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Registasi Panitia</h1>
              <p class="text-lead text-light">Harap isi formulir dengan benar</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action="" method="post">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama organisasi" type="text" name="nama" value="<?= @$_POST['nama']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat organisasi" type="text" name="alamat" value="<?= @$_POST['alamat']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Kode POS" type="text" name="kodepos" value="<?= @$_POST['kodepos']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" value="<?= @$_POST['email']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password1">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Ulangi password..." type="password" name="password2">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" name="register">Buat Akun</button>
                </div>
              </form>
              <?php
              if(isset($_POST["register"])){
                $nama = $this->db->escape_str($this->input->post("nama", TRUE));
                $alamat = $this->db->escape_str($this->input->post("alamat", TRUE));
                $kodepos = $this->db->escape_str($this->input->post("kodepos", TRUE));
                $email = $this->db->escape_str($this->input->post("email", TRUE));
                $password1 = $this->db->escape_str($this->input->post("password1", TRUE));
                $password2 = $this->db->escape_str($this->input->post("password2", TRUE));
                if($nama == ""){
                  $this->alert->mes("error", "", "Nama organisasi wajib diisi...");
                }else if($alamat == ""){
                  $this->alert->mes("", "", "Alamat organisasi wajib diisi");
                }else if($kodepos == ""){
                  $this->alert->mes("", "", "Kode POS wajib diisi...");
                }else if($email == ""){
                  $this->alert->mes("", "", "Email wajib diisi...");
                }else if($password1 == ""){
                  $this->alert->mes("", "", "Password wajib diisi...");
                }else{
                  if($password1 == $password2){
                    $query = $this->db->query("SELECT * FROM panitia WHERE email = '$email'");
                    if($query->num_rows() == 1){
                      $this->alert->mes("", "", "Alamat email ini sudah terdaftar");
                    }else{
                      $password = password_hash($password1, PASSWORD_DEFAULT);
                      $register = $this->db->query("INSERT INTO panitia(nama, alamat, kodepos, email, password) VALUES('$nama', '$alamat', '$kodepos', '$email', '$password')");

                      if($register){
                        $this->session->set_userdata("panitiaDD18", $email);
                        $this->alert->mes("success", "Pendaftaran berhasil", "", 1, base_url("/panitia"));
                      }
                    }
                  }else{
                    $this->alert->mes("", "", "Kedua password harus sama...");
                  }
                }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
        </div>
        <div class="col-xl-6">
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url(); ?>assets/js/argon.js?v=1.0.0"></script>
</body>

</html>