  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/custom/images/user.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user->first_name ?> <?php echo $user->last_name ?></p>
          <small><?php echo $user->email ?></small>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li <?php if ($menu == "Dashboard") echo "class=\"active\"" ?>><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview <?php if ($menu == "Manajemen Asset") echo "active" ?>">
          <a href="#">
            <i class="fa fa-bank"></i>
            <span>Manajemen Asset</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($sub_menu == "Data Gardu Induk") echo "class=\"active\"" ?>>
              <a href="gi">
              <?php
                if ($sub_menu == "Data Gardu Induk") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Data Gardu Induk</a>
            </li>
            <li>
              <a href="trafogi">
              <?php
                if ($sub_menu == "Data Trafo Gardu Induk") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?>
              Data Trafo Gardu Induk</a>
            </li>
            <li <?php if ($sub_menu == "Data Penyulang") echo "class=\"active\"" ?>>
              <a href="penyulang">
              <?php
                if ($sub_menu == "Data Penyulang") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Data Penyulang</a>
            </li>
            <li <?php if ($sub_menu == "Data Gardu") echo "class=\"active\"" ?>>
              <a href="gardu">
              <?php
                if ($sub_menu == "Data Gardu") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Data Gardu</a>
            </li>
            <li <?php if ($sub_menu == "Data Recloser") echo "class=\"active\"" ?>>
              <a href="recloser">
              <?php
                if ($sub_menu == "Data Recloser") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Data Recloser</a>
            </li>
            <li <?php if ($sub_menu == "Data SSO") echo "class=\"active\"" ?>>
              <a href="sso">
              <?php
                if ($sub_menu == "Data SSO") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Data SSO</a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu == "Manajemen HarJar") echo "active" ?>">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Manajemen Harjar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($sub_menu == "Data Pembebanan Trafo") echo "class=\"active\"" ?>>
              <a href="trafoload">
              <?php
                if ($sub_menu == "Data Pembebanan Trafo") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Data Pembebanan Trafo</a>
            </li>
            <li <?php if ($sub_menu == "Hasil Inspeksi Jaringan") echo "class=\"active\"" ?>>
              <a href="inspeksi">
              <?php
                if ($sub_menu == "Hasil Inspeksi Jaringan") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Hasil Inspeksi Jaringan</a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu == "Manajemen Gangguan") echo "active" ?>">
          <a href="#">
            <i class="fa fa-chain-broken"></i>
            <span>Manajemen Gangguan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($sub_menu == "Trip Penyulang") echo "class=\"active\"" ?>>
              <a href="trippmt">
              <?php
                if ($sub_menu == "Trip Penyulang") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Trip Penyulang</a>
            </li>
            <li <?php if ($sub_menu == "Trip Recloser") echo "class=\"active\"" ?>>
              <a href="triprec">
              <?php
                if ($sub_menu == "Trip Recloser") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Trip Recloser</a>
            </li>
            <li <?php if ($sub_menu == "Trip Recloser") echo "class=\"active\"" ?>>
              <a href="tripsso">
              <?php
                if ($sub_menu == "Trip SSO") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Trip SSO</a>
            </li>
            <li <?php if ($sub_menu == "Trip FCO") echo "class=\"active\"" ?>>
              <a href="tripfco">
              <?php
                if ($sub_menu == "Trip FCO") {
                  echo "<i class=\"fa fa-circle-o text-yellow\"></i>";
                } else {
                  echo "<i class=\"fa fa-circle-o text-white\"></i>";
                }
              ?> 
              Trip FCO</a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu == "Manajemen Material") echo "active" ?>">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Manajemen Material</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($sub_menu == "Transaksi Material") echo "class=\"active\"" ?>>
            <a href="transaksi">
            <?php
              if ($sub_menu == "Transaksi Material") {
                echo "<i class=\"fa fa-shopping-cart text-yellow\"></i>";
              } else {
                echo "<i class=\"fa fa-shopping-cart text-white\"></i>";
              }
            ?> 
            Transaksi Material</a>
            </li>
            <li><a href="persediaan">
            <?php
              if ($sub_menu == "Persediaan Material") {
                echo "<i class=\"fa fa-line-chart text-yellow\"></i>";
              } else {
                echo "<i class=\"fa fa-line-chart text-white\"></i>";
              }
            ?>
            Persediaan Material</a></li>
          </ul>
        </li>
        <li <?php if ($menu == "Manajemen Pengguna") echo "class=\"active\"" ?>><a href="pengguna"><i class="fa fa-users"></i><span>Manajemen Pengguna</span></a></li>
        <li class="header">SETTING</li>
        <li <?php if ($menu == "CRUD Generator") echo "class=\"active\"" ?>><a href="harviacode"><i class="fa fa-database"></i><span>CRUD Generator</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->