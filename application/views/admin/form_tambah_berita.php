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
            <h1 class="text-center">Form Tambah Berita</h1>
            <form method="post" action="<?=base_url('admin/tambah_berita');?>"  enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="judul" class="col ml-auto">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" ></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="date">Tanggal</label>
                        <input name="date" id="date" type="date" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col ml-2 mt-3">
                        <label for="photo">Pilih file...</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?=base_url('admin');?>/berita" class="btn btn-secondary ml-2">Batal</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  