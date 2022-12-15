

    <!-- Logo -->

    <a href="<?=site_url()?>" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>|||</b></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>WEB-BERITA</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Tekan Menu ini..</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </a>


      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                  <img src="<?=base_url('assets/dist/img/avatar04.png')?>" class="user-image" alt="User Image">

              <span class="hidden-xs"><?= ucwords(@$this->session->admin->username) ?></span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                  <img src="<?=base_url('assets/dist/img/avatar04.png')?>" class="img-circle" alt="User Image">

                <p class="hidden-xs">

                  <?= substr(ucwords(@$this->session->admin->username),0,8) ?>

                </p>

                <small class="waktu text-center hidden-xs" style="color: #fff"></small>

              </li>

              <!-- Menu Footer-->

              <li class="user-footer">

                <div>

                  <a href="<?=site_url('logout')?>" class="btn btn-default btn-block btn-flat">Keluar</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

          <li>

            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->

          </li>

        </ul>

      </div>

    </nav>