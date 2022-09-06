<div class="page-header header-filter" data-parallax="true" style="background-color: #eee;">
        <div class="col mr-auto ml-auto">
          <div class="row">
            <div class="cardcard-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah.jpg">                   
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col mb-12">
                      <h1 class="title text-center">Kelompok Tani Uma Beringin</h1>
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
                      <h1 class="title text-center">Kelompok Tani Uma Beringin</h1>
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
                      <h1 class="title text-center">Kelompok Tani Uma Beringin</h1>
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
      <div class="section">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
        <?php } ?>
        <div class="row">
          <div class="col-md-9 ml-auto mr-auto">
            <a href="<?=base_url('admin');?>/tambah_berita" >
              <button class="btn btn-success">
                Tambah Berita
              </button>
            </a>
            <h2 class="title text-center">Riwayat berita</h2>
              <div class="card-rows">
                <?php foreach ($berita as $ber):?>
                  <div class="card">
                    <div class="card-body">
                      <img class="card-img-top" src="<?=base_url();?>uploads/<?=$ber['photo'];?>" alt="<?= $ber['photo'];?>">
                      <a href="<?=base_url('user');?>/profile">
                        <h5 class="card-title"><?=$ber['judul'];?></h5>
                      </a>
                      <p class="card-text"><?=$ber['deskripsi'];?></p>
                      <p class="card-text"><small class="text-muted"><?=$ber['date'];?></small></p>
                    </div>
                  </div>
                  <a href="<?= base_url('admin/edit_berita/') . $ber['id']; ?>" >
                    <button class="btn btn-success">
                      Edit
                    </button>
                  </a>
                  <a href="<?= base_url('admin/hapus_berita/') . $ber['id']; ?>" >
                    <button class="btn btn-danger">
                      Hapus
                    </button>
                  </a>
                  <?php endforeach;?>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  