<style type="text/css">
  #contact .jumbotron{
    background-image: url(<?=base_url('assets/images/about.jpg')?>);
    background-size: cover;
    background-attachment: fixed;
    height: 590px;
    position: relative;
    z-index: 1;
  }
  #contact .jumbotron .container{
    position: relative;
    z-index: 3;
  }
  #contact .jumbotron::after{
    content:'';
    display: block;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,.4);
    background-image: linear-gradient(to bottom, rgba(0,0,0,.6), rgba(0,0,0,.3));
    position: absolute;
    bottom: 0;
    z-index: 2;
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- JUMBOTRON -->
      <div id="contact">
        <div class="jumbotron jumbotron-fluid mb-0">
          <div class="container">
            <div id="text">
              <h1 ><span>Check Out</span></h1>
              <p class="lead">Check Out Easily and Experience the Difference in Person.</p>
            </div>
          </div>
        </div>
      </div>
    <!-- END JUMBOTRON -->

    <!-- Setelah bagian jumbotron yang ada -->
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Keranjang Belanja Anda</h2>
            
            <?php if($this->session->flashdata('message')): ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('message') ?>
                </div>
            <?php endif; ?>
            
            <?php if(empty($cart)): ?>
                <div class="alert alert-info">Keranjang belanja Anda kosong.</div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $total = 0;
                            foreach($cart as $item): 
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                            ?>
                                <tr>
                                    <td><?= $item['name'] ?></td>
                                    <td>Rp <?= number_format($item['price'], 0, '-,', '.') ?></td>
                                    <td><?= $item['quantity'] ?></td>
                                    <td>Rp <?= number_format($subtotal, 0, '-,', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="table-active">
                                <td colspan="3" class="text-right"><strong>Total:</strong></td>
                                <td><strong>Rp <?= number_format($total, 0, '-,', '.') ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="text-right mt-4">
                    <form action="<?= base_url('user/checkout') ?>" method="POST" class="d-inline">
                        <button type="submit" class="btn btn-success btn-lg">Bayar</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
