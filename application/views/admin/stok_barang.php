<div class="page-header header-filter" data-parallax="true" style="background-color: #eee;">
        <div class="col mr-auto ml-auto">
          <div class="row">
            <div class="cardcard-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah.jpg">                   
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col mb-12 text-white">
                      <h1 class="title  text-center">Kelompok Tani Uma Beringin</h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah1.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col mb-12">
                      <h1 class="title text-white text-center">Kelompok Tani Uma Beringin</h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah2.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col mb-10">
                      <h1 class="title text-white text-center">Kelompok Tani Uma Beringin</h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      <h1 class="title text-center"></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col ml-auto mr-auto">

              <?php if ($this->session->flashdata('success')) { ?>
                  <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
              <?php } ?>
              <?php if ($this->session->flashdata('danger')) { ?>
                  <div class="alert alert-danger"> <?= $this->session->flashdata('danger') ?> </div>
              <?php } ?>
              
          <div class="row">
            <div class="col ml-auto mr-auto ">
            <h2 class="title text-center">List Surat</h2>
            <a href="<?=base_url('user');?>/tambah_surat">
                <button class="btn btn-success">Buat Surat</button>
            </a>
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No Surat</th>
                  <th scope="col">ID Anggota</th>
                  <th scope="col">Keperluan</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Tools</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($surat_pengantar as $s):?>
                  <tr>
                    <td><?=$s['no_surat'];?></td>
                    <td><?=$s['id_anggota'];?></td>
                    <td><?=$s['jenis_surat'];?></td>
                    <td><?=$s['jumlah'];?></td>
                    <td>
                            <a href="<?= base_url('Pdf/dokumen/') . $s['no_surat'] . '/' . $s['id_anggota'] . '/' . $s['jenis_surat']; ?>" target="blank">
                              <button class="badge badge-success">
                                Detail
                              </button>
                            </a>  
                            <a href="<?=base_url('admin/edit_surat/'). $s['id_anggota'] ;?>" >
                              <button class="badge badge-warning">
                                Edit
                              </button>
                            </a>    
                            <a href="<?=base_url('admin/hapus_surat/'). $s['id_anggota'] ;?>" >
                              <button class="badge badge-danger">
                                Hapus
                              </button>
                            </a>  
                    </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
            <h2 class="title">Stok Barang</h2>
            <div class="card card-nav-tabs">
                <div class="card-header card-header-success">
                  <!-- colors: "header-success", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#bibit" data-toggle="tab">
                            <i class="material-icons">shopping_cart</i>
                            Bibit & Pupuk
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#alat" data-toggle="tab">
                            <i class="material-icons">build</i>
                            ALat
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="bibit">
                    <a href="<?=base_url('admin');?>/tambah_barang" >
                              <button class="btn btn-success">
                                Tambah
                              </button>
                            </a>
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Pupuk</th>
                            <th scope="col">Bibit</th>
                            <th scope="col">Tools</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($stok_barang as $sb):?>
                          <tr>
                            <th scope="row">1</th>
                            <td><?=$sb['anggota'];?></td>
                            <td><?=$sb['pupuk'];?> Kg</td>
                            <td><?=$sb['bibit'];?> Kg</td>
                            <td>
                            <a href="<?=base_url('admin/edit_barang').'/'.$sb['id'];?>" >
                              <button class="badge badge-success">
                                Edit
                              </button>
                            </a>    
                            <a href="<?=base_url('admin/hapus_barang').'/'.$sb['id'];?>" >
                              <button class="badge badge-danger">
                                Hapus
                              </button>
                            </a>    
                            </td>
                          </tr>
                          <?php endforeach;?>
                      </table>
                    </div>
                    <div class="tab-pane" id="alat">
                            <a href="<?=base_url('admin');?>/tambah_alat" >
                              <button class="btn btn-success">
                                Tambah
                              </button>
                            </a>
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Status</th>
                              <th scope="col">Nama pemakai</th>
                              <th scope="col">Tools</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($stokalat as $st):?>
                          <tr>
                            <th scope="row">1</th>
                            <td><?=$st['nama'];?></td>
                            <td><?=$st['status'];?></td>
                            <td><?=$st['anggota'];?></td>
                            <td>
                            <a href="<?=base_url('admin/edit_alat').'/'.$st['id'];?>" >
                              <button class="badge badge-success">
                                Edit
                              </button>
                            </a>
                            <a href="<?=base_url('admin/hapus_alat').'/'.$st['id'];?>" >
                              <button class="badge badge-danger">
                                Hapus
                              </button>
                            </a>
                            </td>
                          </tr>
                          <?php endforeach;?>
                        </tbody>
                      </table>  
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  