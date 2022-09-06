<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
<?php $role_id = $this->session->userdata('role');?>
    <div class="container">
      <div class="navbar-translate">
        <a href="<?=base_url('user')?>">
        <img src="<?=base_url();?>ds/assets/img/logo.png" alt="logo_org" height="75">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="<?=base_url('user');?>" class="nav-link">
            <span class="nav-bar">Home</span>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="<?=base_url('user');?>/profile" class="nav-link">
            <span class="nav-bar">Profile</span>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="<?=base_url('user');?>/stok_barang" class="nav-link">
            <span class="nav-bar">Stok Barang</span>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="<?=base_url('user');?>/anggota" class="nav-link">
            <span class="nav-bar">Anggota</span>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="<?=base_url('user');?>/berita" class="nav-link">
            <span class="nav-bar">Berita</span>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="<?=base_url('login/logout');?>" class="button-link">
              <span class="badge badge-pill badge-success">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>