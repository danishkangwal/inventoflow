<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboard/') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ADN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?= $_SESSION['username']=='admin'?'Admin':$_SESSION['firstname'] ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  