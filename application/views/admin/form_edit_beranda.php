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
            <h1 class="text-center">Form Edit Beranda</h1>
            <form method="post" action="<?=base_url('admin/edit_beranda');?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pertanyaan1" class="col ml-auto">Pertanyaan 1</label>
                        <input type="text" class="form-control" id="pertanyaan1" name="pertanyaan1" value="<?=$beranda['pertanyaan1'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jawaban1">Jawaban 1</label>
                        <textarea type="text" class="form-control" id="jawaban1" name="jawaban1" value="<?=$beranda['jawaban1'];?>"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pertanyaan2" class="col ml-auto">Pertanyaan 2</label>
                        <input type="text" class="form-control" id="pertanyaan2" name="pertanyaan2" value="<?=$beranda['pertanyaan2'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jawaban2">Jawaban 2</label>                        
                        <textarea type="text" class="form-control" id="jawaban2" name="jawaban2" value="<?=$beranda['jawaban2'];?>"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pertanyaan3" class="col ml-auto">Pertanyaan 3</label>
                        <input type="text" class="form-control" id="pertanyaan3" name="pertanyaan3" value="<?=$beranda['pertanyaan3'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jawaban3">Jawaban 3</label>
                        <textarea type="text" class="form-control" id="jawaban3" name="jawaban3" value="<?=$beranda['jawaban3'];?>"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?=base_url('admin');?>/stok_barang" class="btn btn-secondary ml-2">Batal</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  