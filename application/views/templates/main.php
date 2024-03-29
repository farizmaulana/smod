<<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('templates/meta.php') ?>

<body class="hold-transition skin-yellow fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<?php $this->load->view('templates/header.php') ?>

<?php $this->load->view('templates/sidebar.php') ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $pageTitle ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $pageTitle ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<?php $this->load->view($contents) ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- =============================================== -->
<?php $this->load->view('templates/footer.php') ?>

</div>
<!-- ./wrapper -->
<?php $this->load->view('templates/js.php') ?>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>