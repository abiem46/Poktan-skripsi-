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
            <h1 class="text-center">Form Edit Anggota</h1>
            <form method="post" action="<?=base_url('admin/edit_anggota/' . $anggota['id_anggota']);?>" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="anggota">Nama Anggota</label>
                        <input type="text" class="form-control" id="anggota" name="anggota" value="<?=$anggota['anggota'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="jabatan" class="col ml-auto">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option selected>Pilih Jabatan...</option>
                            <option value="Ketua">Ketua</option>
                            <option value="Penyuluh Pendamping">Penyuluh Pendamping</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Anggota">Anggota</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="desa" class="col ml-auto">Desa</label>
                        <input type="text" class="form-control" id="desa" name="desa" value="<?=$anggota['desa'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dusun" class="col ml-auto">Dusun</label>
                        <input type="text" class="form-control" id="dusun" name="dusun" value="<?=$anggota['dusun'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="rt" class="col ml-auto">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt" value="<?=$anggota['rt'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rw">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw" value="<?=$anggota['rw'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="luas_tanah">Luas Tanah</label>
                        <input type="text" class="form-control" id="luas_tanah" name="luas_tanah" value="<?=$anggota['luas_tanah'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?=base_url('admin');?>/anggota" class="btn btn-secondary ml-2">Batal</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  