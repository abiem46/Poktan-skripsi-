<div class="page-header header-filter" data-parallax="true" style="background-color: #eee;">
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
            <h1 class="text-center">Form Tambah Alat</h1>
            <form method="post" action="<?=base_url('admin/tambah_alat');?>">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nama">Nama Alat</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option selected>Pilih Status..</option>
                            <option value="Dipakai">Dipakai</option>
                            <option value="Tidak Dipakai">Tidak Dipakai</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="anggota">Anggota</label>
                        <select name="anggota" id="anggota" class="form-control">
                            <option selected>Pilih Anggota..</option>
                            <?php foreach ($anggota as $ang):?>
                            <option value="<?=$ang['anggota'];?>"><?=$ang['anggota'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?=base_url('admin');?>/stok_barang" class="btn btn-secondary ml-2">Batal</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  