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
          <div class="col ml-auto mr-auto">
            <h1 class="text-center">Surat Pengajuan</h1>
            <form method="post" action="<?=base_url('user/tambah_surat');?>" >
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="id_anggota">Id Anggota</label>
                        <select id="id_anggota" name="id_anggota" class="form-control">
                            <option selected>Pilih Id Anggota..</option>
                            <?php foreach ($anggota as $a):?>
                            <option value="<?=$a['id_anggota'];?>"><?=$a['id_anggota'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="jenis_surat">Keperluan Surat</label>
                        <select id="jenis_surat" name="jenis_surat" class="form-control">
                            <option selected>Pilih Keperluan..</option>
                            <?php foreach ($jenis_surat as $a):?>
                            <option value="<?=$a['jenis_surat'];?>"><?=$a['jenis_surat'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label for="jumlah">Jumlah (/Kg)</label>
                        <input type="text"  id="jumlah" name="jumlah" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?=base_url('user');?>/stok_barang" class="btn btn-secondary ml-2">Batal</a>
                </div>
            <form>
          </div>
        </div>
      </div>
    </div>
  </div>