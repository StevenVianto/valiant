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



    <!-- JUMBOTRON -->
      <div id="contact">
        <div class="jumbotron jumbotron-fluid mb-0">
          <div class="container">
            <div id="text">
              <h1 ><span>Find Us</span></h1>
              <p class="lead">Locate Us Easily and Experience the Difference in Person.</p>
            </div>
          </div>
        </div>
      </div>
    <!-- END JUMBOTRON -->

    <!-- Contact -->
      <div class="contact">
        <div class="container ">
          <div class="row pt-3 mb-5">
            <div class="col text-center ">
              <h2 class="font-weight-bold">Contact</h2> 
              <hr>
            </div>
          </div>
          <div class="row justify-content-center ">
            <div class="col-lg-4 mb-4">

              <div class="card text-white bg-primary ">
                  <div class="card-header p-1">
                    <h2 class="card-title font-weight-bold text-center">Contact</h2>
                  </div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item"><i class="fas fa-phone"></i> +62 878 4199 0650</li>
                  <li class="list-group-item"><i class="far fa-envelope"></i> RubekaCafe@gmail.com </li>
                  <!-- <li class="list-group-item"><i class="fa fa-map-marker-alt"></i>  Bengkulu, Bengkulu, Indonesia</li> -->
                </ul>

                <div class="card text-white bg-info mt-3">
                  <div class="card-header p-1">
                    <h2 class="card-title font-weight-bold text-center">Location</h2>
                  </div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item"><i class="fa fa-building"></i> Rubeka cafe</li>
                  <li class="list-group-item"><i class="fa fa-map-marked-alt"></i> Ruko Imperium Blok B No.25-26,</li>
                  <li class="list-group-item"><i class="fa fa-map-marker-alt"></i>  Batam, Kepulauan Riau 29444</li>
                </ul>

                
            </div>
            <div class="col-lg-8">
            <div style="padding-top: 5%; padding-bottom: 5%; padding-left: 5%;">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.059295767372!2d104.02176037472414!3d1.1176243988716714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989417d15dc47%3A0x1ec7be23cd9b0509!2sRubeka%20Rumah%20Pamer%20dan%20Kopi!5e0!3m2!1sid!2sid!4v1732529410416!5m2!1sid!2sid"
								width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
            </div>
          </div>
        </div>
      </div>
    
    <!-- contact us try  -->

    <div class="contact-form-container">
  <div class="container">
    <div class="row pt-5 mb-5">
      <div class="col text-center">
        <h2 class="font-weight-bold" style="color: #e0d1b4;">Get In Touch</h2>
        <p class="text-muted">We'd love to hear from you!</p>
        <hr>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="https://formspree.io/f/mgeglzwr" method="post">
          <div class="form-group">
            <label for="name" style="color: #e0d1b4;">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email" style="color: #e0d1b4;">Email</label>
            <input type="email" class="form-control" id="email" name="_replyto" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="message" style="color: #e0d1b4;">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block" style="background-color: #a3824a; border-color: #a3824a;">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>







      <style>




.contact-form-container {
  background-color: #2c2c2c; /* Sesuaikan dengan latar belakang gambar kedua */
  padding: 40px 0;
}

.contact-form-container .form-control {
  background-color: #444;
  color: #e0d1b4;
  border: 1px solid #555;
}

.contact-form-container .form-control::placeholder {
  color: #aaa;
}

.contact-form-container .btn {
  color: #fff;
  font-weight: bold;
}

.contact-form-container label {
  font-weight: bold;
}

      
      </style>
    <!-- End Contact -->