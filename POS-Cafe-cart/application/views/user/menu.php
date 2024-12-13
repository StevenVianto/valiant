<style type="text/css">
  #menu .jumbotron {
    background-image: url(<?= base_url('assets/images/3homepage.WEBP') ?>);
    background-size: cover;
    background-attachment: fixed;
    height: 580px;
    position: relative;
    z-index: 1;
  }

  #menu .jumbotron .container {
    position: relative;
    z-index: 3;
  }

  #menu .jumbotron::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .4);
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, .4), rgba(0, 0, 0, 0));
    position: absolute;
    bottom: 0;
    z-index: 2;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- JUMBOTRON -->
<div id="menu">
  <div class="jumbotron jumbotron-fluid mb-0">
    <div class="container">
      <div id="text">
        <h1>Discover <span>Our Menu</span></h1>
        <p class="lead">Uncover a World of Flavors with Our Specialty Menus. </p>
      </div>
    </div>
  </div>
</div>
<!-- END JUMBOTRON -->

<!-- CONTENT -->
<div id="content" class="bg-darkgrey">
  <div class="container">
    <!-- Menu Navigation Tabs -->
    <div class="row mb-4">
      <div class="col-12">
        <div class="title">
          <h2>Our Menu</h2>
          <hr>
        </div>
        <ul class="nav nav-pills" id="menuTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab">SEMUA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="food-tab" data-toggle="tab" href="#food" role="tab">MAKANAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="drink-tab" data-toggle="tab" href="#drink" role="tab">MINUMAN</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Menu Content -->
    <div class="tab-content" id="menuTabContent">
      <!-- ALL Menu -->
      <div class="tab-pane fade show active" id="all" role="tabpanel">
        <div class="row">
          <?php if (!empty($tampilAll)): ?>
            <?php foreach ($tampilAll as $ta): ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <img src="<?= base_url('assets/upload/' . $ta->picture) ?>" class="card-img-top"
                    alt="<?= $ta->name_menu ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $ta->name_menu ?></h5>
                    <p class="card-text"><?= $ta->description ?></p>
                  </div>
                  <div class="card-footer d-flex justify-content-between align-items-center ">
                    <span class="h5 mb-0" style="color: #e67e22;" >Rp <?= number_format($ta->price, 0, ',', '.') ?></span>
                    <form action="<?= base_url('user/add_to_cart') ?>" method="POST">
                      <input type="hidden" name="menu_id" value="<?= $ta->kode_menu ?>">
                      <input type="hidden" name="name" value="<?= $ta->name_menu ?>">
                      <input type="hidden" name="price" value="<?= $ta->price ?>">
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-cart-plus"></i> Tambah
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="col-12">
              <div class="alert alert-info">Tidak ada menu tersedia</div>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- FOOD Menu -->
      <div class="tab-pane fade" id="food" role="tabpanel">
        <div class="row">
          <?php if (!empty($tampilFood)): ?>
            <?php foreach ($tampilFood as $tf): ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <img src="<?= base_url('assets/upload/' . $tf->picture) ?>" class="card-img-top"
                    alt="<?= $tf->name_menu ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $tf->name_menu ?></h5>
                    <p class="card-text"><?= $tf->description ?></p>
                  </div>
                  <div class="card-footer d-flex justify-content-between align-items-center text-dark ">
                    <span class="h5 mb-0">Rp <?= number_format($tf->price, 0, ',', '.') ?></span>
                    <form action="<?= base_url('user/add_to_cart') ?>" method="POST">
                      <input type="hidden" name="menu_id" value="<?= $tf->kode_menu ?>">
                      <input type="hidden" name="name" value="<?= $tf->name_menu ?>">
                      <input type="hidden" name="price" value="<?= $tf->price ?>">
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-cart-plus"></i> Tambah
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="col-12">
              <div class="alert alert-info">Tidak ada menu makanan tersedia</div>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- DRINK Menu -->
      <div class="tab-pane fade" id="drink" role="tabpanel">
        <div class="row">
          <?php if (!empty($tampilDrink)): ?>
            <?php foreach ($tampilDrink as $td): ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <img src="<?= base_url('assets/upload/' . $td->picture) ?>" class="card-img-top"
                    alt="<?= $td->name_menu ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $td->name_menu ?></h5>
                    <p class="card-text"><?= $td->description ?></p>
                  </div>
                  <div class="card-footer d-flex justify-content-between align-items-center ">
                    <span class="h5 mb-0">Rp <?= number_format($td->price, 0, ',', '.') ?></span>
                    <form action="<?= base_url('user/add_to_cart') ?>" method="POST">
                      <input type="hidden" name="menu_id" value="<?= $td->kode_menu ?>">
                      <input type="hidden" name="name" value="<?= $td->name_menu ?>">
                      <input type="hidden" name="price" value="<?= $td->price ?>">
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-cart-plus"></i> Tambah
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="col-12">
              <div class="alert alert-info">Tidak ada menu minuman tersedia</div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .card-title {
        color: #000 !important;
        font-weight: bold;
    }
    .card-text {
        color: #000 !important;
        text-align: justify !important;
    }
    .btn-brown {
        background-color: #CD853F;
        color: white;
    }
    .btn-brown:hover {
        background-color: #8B4513;
        color: white;
    }
    .card-footer .h5 {
        color: #e67e22 !important;
    }
    


    /* Gaya untuk tab yang aktif */
    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        background-color: #e67e22 !important;
        color: white !important;
    }

 

</style>
<!-- End CONTENT -->