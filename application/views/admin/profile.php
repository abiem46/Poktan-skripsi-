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
        <div class="row">
        <?php if ($this->session->flashdata('success')) { ?>
                  <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
              <?php } ?>
          <div class="col-md-10 ml-auto mr-auto">
            <a href="<?=base_url('admin');?>/edit_profile">
              <button class="btn btn-success">
                Edit
              </button>
            </a>
            <h2 class="title text-center">Struktur Organisasi</h2>
              <div class="card">
                <div class="card-body">
                  <img class="card-img-top" src="<?=base_url();?>/ds/assets/img/struktur.png" alt="foto_struktur">
                </div>
              </div>
              <?php foreach($profile as $prof):?>
            <h5 class="description"><?=$prof['deskripsi_org'];?></h5>
          </div>
        </div>
      </div>
      <div class="section ">
          <div class="col-mt-3 ml-auto mr-auto">
            <h3 class=" title text-center">Visi & misi</h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">Visi</h5>
                    <p class="card-text"><?=$prof['visi'];?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">Misi</h5>
                    <p class="card-text"><?=$prof['misi'];?></p>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  