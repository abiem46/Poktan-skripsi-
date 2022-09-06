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
      <div class="section text-center">
        <?php if ($this->session->flashdata('success')) { ?>
          <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
          <?php } ?>
          <div class="row">
          <div class="col ml-auto mr-auto">
            <a href="<?=base_url('admin');?>/tambah_anggota" >
              <button class="btn btn-success">
                Tambah anggota
              </button>
            </a>
            <h2 class="title">Daftar Anggota</h2>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Desa</th>
                    <th scope="col">Dusun</th>
                    <th scope="col">RT/RW</th>
                    <th scope="col">Luas Tanah</th>
                    <th scope="col">tools</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($anggota as $a):?>
                  <tr>
                    <th scope="row"><?=$a['id_anggota'];?></th>
                    <td><?=$a['anggota'];?></td>
                    <td><?=$a['jabatan'];?></td>
                    <td><?=$a['desa'];?></td>
                    <td><?=$a['dusun'];?></td>
                    <td><?=$a['rt'];?>/<?=$a['rw'];?></td>
                    <td><?=$a['luas_tanah'];?></td>
                    <td>
                    <a href="<?=base_url('admin/edit_anggota').'/'.$a['id_anggota'];?>">
                      <button class="badge btn-success">
                        Edit
                      </button>
                    </a>
                    <a href="<?=base_url('admin/hapus_anggota').'/'.$a['id_anggota'];?>" >
                      <button class="badge btn-danger">
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
      
  