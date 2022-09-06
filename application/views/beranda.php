  <div class="page-header header-filter" data-parallax="true" style="background-color: #eee;">
        <div class="col mr-auto ml-auto">
          <div class="row">
            <div class="cardcard-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah.jpg">                   
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col-md-5 mb-12">
                      <h1 class="title text-left">Uma Beringin</h1>
                      <h4 class="title text-left">Nusa Tenggara Barat</h4>
                      <h4 class="title text-left">Sumbawa</h4>
                      <h4 class="title text-left">Alas</h4>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah1.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col-md-5 mb-12">
                      <h1 class="title text-left">Uma Beringin</h1>
                      <h4 class="title text-left">Nusa Tenggara Barat</h4>
                      <h4 class="title text-left">Sumbawa</h4>
                      <h4 class="title text-left">Alas</h4>
                      <h1 class="title text-center"></h1>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?=base_url();?>ds/assets/img/sawah2.jpg" >
                    <div class="carousel-caption d-none d-md-block">
                      <div class="col-md-5 mb-10">
                      <h1 class="title text-left">Uma Beringin</h1>
                      <h4 class="title text-left">Nusa Tenggara Barat</h4>
                      <h4 class="title text-left">Sumbawa</h4>
                      <h4 class="title text-left">Alas</h4>
                      <h1 class="title text-left"></h1>
                      <h1 class="title text-left"></h1>
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
      <div class="section text-left">
        <div class="row">
          <?php foreach($beranda as $ber):?>
          <div class="col">
            <h2 class="title"><?=$ber['pertanyaan1'];?></h2>
            <h5 class="description"><?=$ber['jawaban1'];?></h5>
          </div>
        </div>
      </div>
      <div class="section text-right">
        <div class="row">
          <div class="col">
          <h2 class="title"><?=$ber['pertanyaan2'];?></h2>
            <h5 class="description"><?=$ber['jawaban2'];?></h5>
          </div>
        </div>
      </div>
      <div class="section text-Left">
        <div class="row">
          <div class="col">
          <h2 class="title"><?=$ber['pertanyaan3'];?></h2>
            <h5 class="description"><?=$ber['jawaban3'];?></h5>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  
      
  