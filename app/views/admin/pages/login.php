<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= WEBSITE_TITLE ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= ASSETS_ADMIN ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= ASSETS_ADMIN ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= ASSETS_ADMIN ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ASSETS_ADMIN ?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= ASSETS ?>images/medicine.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= ASSETS_ADMIN ?>images/logo.jpg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" name="Login" onsubmit="return validate()">
                <div class="form-group">
                  <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                  <p id="error_email"  class="text-danger"><?php echo checkError(); ?></p>
                </div>
                <div class="mt-3">
                <input type="submit" id="btnSubmit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= ASSETS_ADMIN ?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= ASSETS_ADMIN ?>js/off-canvas.js"></script>
  <script src="<?= ASSETS_ADMIN ?>js/hoverable-collapse.js"></script>
  <script src="<?= ASSETS_ADMIN ?>js/template.js"></script>
  <script src="<?= ASSETS_ADMIN ?>js/settings.js"></script>
  <script src="<?= ASSETS_ADMIN ?>js/todolist.js"></script>
  <!-- endinject -->

  <!-- validate -->
  <script>

  </script>


</body>

</html>
